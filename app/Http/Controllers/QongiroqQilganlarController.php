<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQongiroqQilganlarRequest;
use App\Http\Requests\UpdateQongiroqQilganlarRequest;
use App\Repositories\QongiroqQilganlarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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
        $qongiroqQilganlars = $this->qongiroqQilganlarRepository->all();

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
        return view('qongiroq_qilganlars.create');
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

        Flash::success('Qongiroq Qilganlar saved successfully.');

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
            Flash::error('Qongiroq Qilganlar not found');

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

        if (empty($qongiroqQilganlar)) {
            Flash::error('Qongiroq Qilganlar not found');

            return redirect(route('qongiroqQilganlars.index'));
        }

        return view('qongiroq_qilganlars.edit')->with('qongiroqQilganlar', $qongiroqQilganlar);
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
            Flash::error('Qongiroq Qilganlar not found');

            return redirect(route('qongiroqQilganlars.index'));
        }

        $qongiroqQilganlar = $this->qongiroqQilganlarRepository->update($request->all(), $id);

        Flash::success('Qongiroq Qilganlar updated successfully.');

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
            Flash::error('Qongiroq Qilganlar not found');

            return redirect(route('qongiroqQilganlars.index'));
        }

        $this->qongiroqQilganlarRepository->delete($id);

        Flash::success('Qongiroq Qilganlar deleted successfully.');

        return redirect(route('qongiroqQilganlars.index'));
    }
}
