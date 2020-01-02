<?php

namespace Picqer\Financials\Exact;

/**
 * Class RevenueListByYear.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialRevenueListByYear
 *
 * @property int $Year Year
 * @property int $Period Period
 * @property float $Amount amount of revenue
 */
class RevenueListByYear extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Year';

    protected $fillable = [
        'Year',
        'Period',
        'Amount',
    ];

    protected $url = 'read/financial/RevenueListByYear';
}
