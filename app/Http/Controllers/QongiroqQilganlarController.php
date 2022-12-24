<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQongiroqQilganlarRequest;
use App\Http\Requests\UpdateQongiroqQilganlarRequest;
use App\Repositories\QongiroqQilganlarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Categories;
use App\Models\QongiroqQilganlar;
use Carbon\Carbon;

class QongiroqQilganlarController extends AppBaseController
{
    /** @var QongiroqQilganlarRepository $qongiroqQilganlarRepository*/
    private $qongiroqQilganlarRepository;

    public function __construct(QongiroqQilganlarRepository $qongiroqQilganlarRepo)
    {
        $this->qongiroqQilganlarRepository = $qongiroqQilganlarRepo;
    }

    /**
     * Display a listing of the QongiroqQilganlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {        
        // Check for search input
        if (request('search')) {
            $qongiroqQilganlars = QongiroqQilganlar::orderBy('id', 'DESC')
            ->orWhere('familya', 'like', '%' . request('search') . '%')
            ->orWhere('ism', 'like', '%' . request('search') . '%')
            ->orWhere('sharif', 'like', '%' . request('search') . '%')
            ->orWhere('telefon_nomer', 'like', '%' . request('search') . '%')->paginate(20);
        } else {
            $qongiroqQilganlars = $this->qongiroqQilganlarRepository->all()->sortByDesc('id')->toQuery()->paginate(20);
        }

        return view('qongiroq_qilganlars.index')
            ->with('qongiroqQilganlars', $qongiroqQilganlars);
    }

    /**
     * Show the form for creating a new QongiroqQilganlar.
     *
     * @return Response
     */
    public function create()
    {

        $categories = Categories::all();

        return view('qongiroq_qilganlars.create')->with('categories', $categories);
    }

    /**
     * Store a newly created QongiroqQilganlar in storage.
     *
     * @param CreateQongiroqQilganlarRequest $request
     *
     * @return Response
     */
    public function store(CreateQongiroqQilganlarRequest $request)
    {
        $input = $request->all();

        $qongiroqQilganlar = $this->qongiroqQilganlarRepository->create($input);

        Flash::success("Siz qo'shgan client bo'yicha barcha ma'lumotlar saytga joylandi!");

        return redirect(route('qongiroqQilganlars.index'));
    }

    /**
     * Display the specified QongiroqQilganlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $qongiroqQilganlar = $this->qongiroqQilganlarRepository->find($id);

        if (empty($qongiroqQilganlar)) {
            Flash::error('Client topilmadi!');

            return redirect(route('qongiroqQilganlars.index'));
        }

        return view('qongiroq_qilganlars.show')->with('qongiroqQilganlar', $qongiroqQilganlar);
    }

    /**
     * Show the form for editing the specified QongiroqQilganlar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $qongiroqQilganlar = $this->qongiroqQilganlarRepository->find($id);
        $categories = Categories::all();

        if (empty($qongiroqQilganlar)) {
            Flash::error('Client topilmadi!');

            return redirect(route('qongiroqQilganlars.index'));
        }

        return view('qongiroq_qilganlars.edit')
        ->with('qongiroqQilganlar', $qongiroqQilganlar)
        ->with('categories', $categories);
    }

    /**
     * Update the specified QongiroqQilganlar in storage.
     *
     * @param int $id
     * @param UpdateQongiroqQilganlarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQongiroqQilganlarRequest $request)
    {
        $qongiroqQilganlar = $this->qongiroqQilganlarRepository->find($id);

        if (empty($qongiroqQilganlar)) {
            Flash::error('Client topilmadi!');

            return redirect(route('qongiroqQilganlars.index'));
        }

        $qongiroqQilganlar = $this->qongiroqQilganlarRepository->update($request->all(), $id);

        Flash::success("Client ma'lumotlari qayta yangilandi!");

        return redirect(route('qongiroqQilganlars.index'));
    }

    /**
     * Remove the specified QongiroqQilganlar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $qongiroqQilganlar = $this->qongiroqQilganlarRepository->find($id);

        if (empty($qongiroqQilganlar)) {
            Flash::error('Client topilmadi!');

            return redirect(route('qongiroqQilganlars.index'));
        }

        $this->qongiroqQilganlarRepository->delete($id);

        Flash::success("Client ma'lumotlari saytdan o'chirildi!");

        return redirect(route('qongiroqQilganlars.index'));
    }


    /**
     * Display a listing of the QongiroqQilganlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function kelganlar_index(Request $request)
    {
        $qongiroqQilganlars = $this->qongiroqQilganlarRepository->all()->where('keldimi', 1)->sortByDesc('id')->toQuery()->paginate(20);

        return view('qongiroq_qilganlars.index')
            ->with('qongiroqQilganlars', $qongiroqQilganlars);
    }


     /**
     * Display a listing of the QongiroqQilganlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function kelmaganlar_index(Request $request)
    {
        $qongiroqQilganlars = $this->qongiroqQilganlarRepository->all()->where('keldimi', 0)->sortByDesc('id')->toQuery()->paginate(20);

        return view('qongiroq_qilganlars.index')
            ->with('qongiroqQilganlars', $qongiroqQilganlars);
    }


    /**
     * Display a listing of the QongiroqQilganlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function telefon_qilinganlar_index(Request $request)
    {
        $qongiroqQilganlars = $this->qongiroqQilganlarRepository->all()->where('qayta_tell_qilindimi', 1)->sortByDesc('id')->toQuery()->paginate(20);

        return view('qongiroq_qilganlars.index')
            ->with('qongiroqQilganlars', $qongiroqQilganlars);
    }



    /**
     * Display a listing of the QongiroqQilganlar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function telefon_qilinmaganlar_index(Request $request)
    {
        $qongiroqQilganlars = $this->qongiroqQilganlarRepository->all()->where('qayta_tell_qilindimi', 0)->sortByDesc('id')->toQuery()->paginate(20);

        return view('qongiroq_qilganlars.index')
            ->with('qongiroqQilganlars', $qongiroqQilganlars);
    }




}
