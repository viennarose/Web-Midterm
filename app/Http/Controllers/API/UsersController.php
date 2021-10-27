<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Rentals;
use App\Repositories\rentalsRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function rentalsQuery() {
        $rentals = Rentals::all();

        if (count($rentals) > 0) {
            return response()->json($rentals, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There are no rentals in the database'], 404);
        }
    }
}
?>
