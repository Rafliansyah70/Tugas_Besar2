<!-- <?php

// namespace App\Http\Controllers;

// use App\Models\Log;
// use Illuminate\Http\Request;
// use Carbon\Carbon;
// use Maatwebsite\Excel\Facades\Excel; // Pastikan ini ada
// use App\Exports\LogsExport; // Pastikan ini ada


// class LogController extends Controller
// {
//     public function showLogs(Request $request)
//     {
//         // Ambil parameter dari request
//         $startDate = $request->start_date;
//         $endDate = $request->end_date;

//         // Mendapatkan log berdasarkan rentang waktu
//         $logs = Log::with(['machine', 'user'])
//             ->when($request->machine_id, function ($query) use ($request) {
//                 return $query->where('machine_id', $request->machine_id);
//             })
//             ->when($request->user_id, function ($query) use ($request) {
//                 return $query->where('user_id', $request->user_id);
//             })
//             ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
//                 return $query->whereBetween('created_at', [Carbon::parse($startDate), Carbon::parse($endDate)]);
//             })
//             ->get();

//         // Mengirimkan data log ke view untuk ditampilkan
//         return view('logs.report', compact('logs'));
//     }

//     // Fungsi untuk meng-export laporan log ke Excel
//     public function exportLogs()
//     {
//         return Excel::download(new LogsExport, 'logs.xlsx');
//     }
// }