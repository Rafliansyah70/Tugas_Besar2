<?php

// namespace App\Exports;

// use App\Models\Log;
// use Maatwebsite\Excel\Concerns\FromCollection; // Pastikan ini ada
// use Maatwebsite\Excel\Concerns\WithHeadings;  // Pastikan ini ada

// class LogsExport implements FromCollection, WithHeadings
// {
//     public function collection()
//     {
//         return Log::with(['machine', 'user'])
//             ->get()
//             ->map(function ($log) {
//                 return [
//                     $log->machine->name,
//                     $log->user->name,
//                     $log->old_status,
//                     $log->new_status,
//                     $log->created_at->format('Y-m-d H:i:s'),
//                 ];
//             });
//     }

//     public function headings(): array
//     {
//         return [
//             'Machine',
//             'User',
//             'Old Status',
//             'New Status',
//             'Date',
//         ];
//     }
// }
// //