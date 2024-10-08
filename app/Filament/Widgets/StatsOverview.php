<?php

namespace App\Filament\Widgets;

use App\Models\Customers;
use App\Models\Orders;
use App\Models\Salesman;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected function getStats(): array
    {
        $mostOrder = Orders::select('customer_id')->selectRaw('COUNT(*) as total_orders')
            ->with('customer')
            ->groupBy('customer_id')
            ->orderByDesc('total_orders')
            ->first();

        $maxAmountOrder = Orders::select('amount')->orderByDesc('amount')
            ->first();

        $maxCommission = Salesman::select('salesman_name')->orderBy('commissions', 'desc')->first();

        $totalCommission = Salesman::select('commissions')->orderBy('commissions', 'desc')->first();

        $revenue = Orders::selectRaw('SUM(amount) as total_amount')->first();
        // dd($revenue);

        return [
            Stat::make('Revenue', '$' . $revenue->total_amount)
                ->description('30k increase')
                ->color('success'),
            Stat::make('Most Order', $mostOrder->customer->customer_name)
                ->description($maxAmountOrder->amount)
                ->descriptionIcon('heroicon-o-currency-dollar')
                ->color('success'),
            Stat::make('Total Orders', Orders::query()->count())
                ->description('15% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Max Commissions', $maxCommission->salesman_name)
                ->description($totalCommission->commissions . '%')
                ->color('warning'),


        ];
    }
}
