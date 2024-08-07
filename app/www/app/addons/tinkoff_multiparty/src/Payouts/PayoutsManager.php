<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Addons\TinkoffMultiparty\Payouts;

use Tygh\Enum\VendorPayoutApprovalStatuses;
use Tygh\Enum\VendorPayoutTypes;
use Tygh\VendorPayouts;

class PayoutsManager
{
    /** @var int $company_id */
    protected $company_id;

    /** @var \Tygh\VendorPayouts $manager */
    protected $manager;

    /** @var bool $can_collect_commission */
    protected $can_collect_commission;

    /**
     * PayoutsManager constructor.
     *
     * @param int                 $company_id             Vendor ID to instantiate payouts manager for
     * @param bool                $can_collect_commission Can collect commission
     * @param \Tygh\VendorPayouts $manager                Vendor payouts manager
     */
    public function __construct($company_id, $can_collect_commission, VendorPayouts $manager)
    {
        $this->company_id = $company_id;
        $this->can_collect_commission = $can_collect_commission;
        $this->manager = $manager;
    }

    /**
     * Creates withdrawal when an order is paid.
     *
     * @param float $amount   Withdrawal amount
     * @param int   $order_id Order ID
     *
     * @return int Withdrawal ID
     */
    public function createWithdrawal($amount, $order_id)
    {
        $params = [
            'company_id'      => $this->company_id,
            'payout_type'     => VendorPayoutTypes::WITHDRAWAL,
            'approval_status' => VendorPayoutApprovalStatuses::COMPLETED,
            'payout_amount'   => $amount,
            'comments'        => __(
                'yandex_checkout.withdrawal_for_the_order',
                [
                    '[order_id]' => $order_id,
                ]
            ),
        ];

        return $this->manager->update($params);
    }

    /**
     * Marks all pending payouts of vendor accepted.
     *
     * @return void
     */
    public function acceptPayouts()
    {
        $pending_payouts = $this->getPendingPayouts();

        foreach ($pending_payouts as $payout_data) {
            $this->manager->update(
                [
                    'approval_status' => VendorPayoutApprovalStatuses::COMPLETED,
                ],
                (int) $payout_data['payout_id']
            );
        }
    }

    /**
     * Gets all vendor pending payouts.
     *
     * @return array<array-key, array<array-key, string|int>>
     */
    protected function getPendingPayouts()
    {
        return $this->manager->getSimple(
            [
                'payout_type'     => VendorPayoutTypes::PAYOUT,
                'approval_status' => VendorPayoutApprovalStatuses::PENDING,
            ]
        );
    }

    /**
     * Gets order commission value.
     *
     * @param int $order_id Order ID
     *
     * @return float Commission value
     */
    public function getOrderFee($order_id)
    {
        if (!$this->can_collect_commission) {
            return 0;
        }

        $commission = $this->manager->getSimple(
            [
                'order_id'    => $order_id,
                'payout_type' => VendorPayoutTypes::ORDER_PLACED,
            ]
        );

        if (!$commission) {
            return 0;
        }

        $commission = reset($commission);

        return $commission['commission_type'] === 'P'
            ? $commission['commission_amount']
            : $commission['commission'];
    }

    /**
     * Gets total amount of pending vendor payouts.
     *
     * @return float
     */
    public function getPendingPayoutsFee()
    {
        if (!$this->can_collect_commission) {
            return 0;
        }

        $fee = 0;

        list($balance,) = $this->manager->getBalance();

        $pending_payouts = $this->getPendingPayouts();

        if ($pending_payouts) {
            if ($balance < 0) {
                $fee = abs($balance);
            } else {
                $fee = abs(array_sum(array_column($pending_payouts, 'payout_amount')));
            }
        }

        return $fee;
    }
}
