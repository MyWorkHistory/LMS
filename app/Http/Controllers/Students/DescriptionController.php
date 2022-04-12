<?php



namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

use App\Models\Auth\User;

use App\Models\Transactions;

use App\Models\System\Session;

use App\Models\Page;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use Carbon\Carbon;

use Cookie;

use Auth;

/**

 * Class HomeController.

 */

class DescriptionController extends Controller

{

    /**

     * @return \Illuminate\View\View

     */
 
    public function index(Request $request)
    {
        $page = Page::find(15);
        return view('students.program-description.index',compact('page'));    
    }
}







