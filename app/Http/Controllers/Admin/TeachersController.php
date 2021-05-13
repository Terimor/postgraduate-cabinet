<?php

namespace App\Http\Controllers\Admin;

use App\Exports\TeachersExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\DestroyTeacher;
use App\Http\Requests\Admin\Teacher\IndexTeacher;
use App\Http\Requests\Admin\Teacher\StoreTeacher;
use App\Http\Requests\Admin\Teacher\UpdateTeacher;
use App\Models\Teacher;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\View\View;

class TeachersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTeacher $request
     * @return array|Factory|View
     */
    public function index(IndexTeacher $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Teacher::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'first_name', 'last_name', 'patronymic', 'email', 'phone_number', 'degree'],

            // set columns to searchIn
            ['id', 'first_name', 'last_name', 'patronymic', 'email', 'phone_number', 'degree']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.teacher.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.teacher.create');

        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTeacher $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTeacher $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Teacher
        $teacher = Teacher::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/teachers'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param Teacher $teacher
     * @throws AuthorizationException
     * @return void
     */
    public function show(Teacher $teacher)
    {
        $this->authorize('admin.teacher.show', $teacher);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Teacher $teacher
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Teacher $teacher)
    {
        $this->authorize('admin.teacher.edit', $teacher);


        return view('admin.teacher.edit', [
            'teacher' => $teacher,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTeacher $request
     * @param Teacher $teacher
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTeacher $request, Teacher $teacher)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Teacher
        $teacher->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/teachers'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTeacher $request
     * @param Teacher $teacher
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTeacher $request, Teacher $teacher)
    {
        $teacher->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    
    /**
     * Export entities
     *
     * @return BinaryFileResponse|null
     */
    public function export(): ?BinaryFileResponse
    {
        return Excel::download(app(TeachersExport::class), 'teachers.xlsx');
    }
}
