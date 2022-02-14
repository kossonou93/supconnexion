<?php

namespace App\Http\Controllers\Users\Ecole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Transaction;
use App\Ecole;
use Auth;
use App\Models\Pays;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class PaiementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:ecole');
    }

    public function index()
    {
        return view('admin.user.ecole.paiement');
    }

    public function show($id)
    {
        $ecole = Ecole::find(Auth::user()->id);
        $pays = Pays::find($ecole->pays_id);
        $offre = $id;
        switch ($id) {
            case 1:
                $offre = 10;
                return view('admin.user.ecole.paiement', compact('offre', 'ecole', 'pays'));
                break;
            case 2:
                $offre = 20;
                return view('admin.user.ecole.paiement', compact('offre', 'ecole', 'pays'));
                break;
            case 3:
                $offre = 30;
                return view('admin.user.ecole.paiement', compact('offre', 'ecole', 'pays'));
                break;
            
            default:
                $offre = 10;
                return view('admin.user.ecole.paiement', compact('offre', 'ecole', 'pays'));
                break;
        }
        
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                //'admin_id' => 'required',
                //'ecole_id' => 'required',
                'montant_initial' => 'required',
                'montant_final' => 'required',
                'etat' => 'required',
            ];
            $rules['ecole_id'] = Auth::user()->id;
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            
            $transaction = Transaction::create($request->all());
            /*
            $data = [
                "statut" => 200,
                "message" => 'inscription réalisée avec succès',
                "data" => $transaction
            ];
            */
            return response()->json($transaction, 201);
        } catch (Exception $th) {
            /*$data = [
                "statut" => 202,
                "message" => $th,
                "data" => []
            ];*/
            return response()->json($data, 201);
        }


    }
}
