<?php
// Important Funtions
use Mpdf\Mpdf;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

// class myMpdf
// {
//     public function get_myMpdf()
//     {
//         $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
//         $fontDirs = $defaultConfig['fontDir'];
//         $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
//         $fontData = $defaultFontConfig['fontdata'];

//         $path = resource_path() . "/fonts";
//         $myMpdf = new \Mpdf\Mpdf([
//             'format' => 'A4',
//             'orientation' => 'P',
//             'fontDir' => array_merge($fontDirs, [$path]),
//             'fontdata' => $fontData + [
//                 'solaimanlipi' => [
//                     'R' => 'SolaimanLipi-Normal.ttf',
//                     // 'B' => 'SolaimanLipi-Bold.ttf',
//                     // 'R' => 'Nikosh.ttf',
//                     'useOTL' => 0xFF,
//                 ],
//             ],
//             'default_font' => 'solaimanlipi'
//         ]);
//         return $myMpdf;
//     }
// }

if (!function_exists('get_myMpdf')) {
    function get_myMpdf($m_size, $m_orientation)
    {
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];
        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $path = public_path() . "/fonts";
        $myMpdf = new \Mpdf\Mpdf([
            'format' => $m_size,
            'orientation' => $m_orientation,
            'fontDir' => array_merge($fontDirs, [$path]),
            'fontdata' => $fontData + [
                'solaimanlipi' => [
                    'R' => 'SolaimanLipi-Normal.ttf',
                    // 'B' => 'SolaimanLipi-Bold.ttf',
                    // 'R' => 'Nikosh.ttf',
                    'useOTL' => 0xFF,
                ],
            ],
            'default_font' => 'solaimanlipi'
        ]);
        return $myMpdf;
    }
}
