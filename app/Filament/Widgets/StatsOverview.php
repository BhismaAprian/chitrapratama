<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Artikel;
use App\Models\Book;
use App\Models\Buku;
use App\Models\FactSheet;
use App\Models\Galeri;
use App\Models\Gallery;
use App\Models\Infografis;
use App\Models\Infographic;
use App\Models\Laporan;
use App\Models\LembarFakta;
use App\Models\PressRelease;
use App\Models\Report;
use App\Models\SiaranPers;
use App\Models\Video;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Siaran Pers', SiaranPers::count()),
            Stat::make('Laporan', Laporan::count()),
            Stat::make('Buku', Buku::count()),
            Stat::make('Galeri', Galeri::count()),
            Stat::make('Infografis', Infografis::count()),
            Stat::make('Artikel', Artikel::count()),
            Stat::make('Lembar Fakta', LembarFakta::count()),
            Stat::make('Video', Video::count()),
            Stat::make('Press Release', PressRelease::count()),
            Stat::make('Report', Report::count()),
            Stat::make('Book', Book::count()),
            Stat::make('Gallery', Gallery::count()),
            Stat::make('Infographic', Infographic::count()),
            Stat::make('Article', Article::count()),
            Stat::make('Fact Sheet', FactSheet::count()),
        ];
    }
}
