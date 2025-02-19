<!-- <?php -->

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Tab;

// class TabController extends Controller
// {
//     public function store(Request $request)
//     {
//         $request->validate([
//             'codigo' => 'required|string|max:255',
//             'nombreRuta' => 'required|string|max:255'
//         ]);

//         $tab = new Tab();
//         $tab->code = $request->input('codigo');
//         $tab->name = $request->input('nombreRuta');
//         $tab->save();

//         return response()->json(['message' => 'Datos guardados con éxito'], 200);
//     }
// }
