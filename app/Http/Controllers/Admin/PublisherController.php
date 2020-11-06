<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Publisher;
use App\Repository\PublisherRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public $publisherRepository;

    public function __construct(PublisherRepository $publisherRepository)
    {
        $this->publisherRepository = $publisherRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $publishers = $this->publisherRepository->list(10);
        return view('admin.publisher.index')->with('publishers', $publishers);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        return response()->json([]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
//        $pub = new Publisher();
//        $pub->publishname = $request->publishname;
//        $pub->image = $request->file->store('/image/publisher', 'public');
//        $pub->save();
//        return redirect()->route('publishers.index')->with('publishers', $this->publisherRepository->list(10));
        if ($request->id) {
            $this->publisherRepository->update($request, $request->id);
            $publishers = $this->publisherRepository->list(10);
            return response()->json(['success' => 'Thay đổi thành công.', 'users' => $publishers, 'count' => count($publishers),]);
        } else {
            $this->publisherRepository->create($request);
            $publishers = $this->publisherRepository->list(10);
            return response()->json(['success' => 'Tạo mới thành công.', 'publishers' => $publishers, 'count' => count($publishers)]);
        }
//        if ($validator->fails()) {
//            return response()->json(['error' => $validator->errors()->all()]);
//        } else {
//            if ($request->id) {
//                $this->publisherRepository->update($request, $request->id);
//                $publishers = $this->publisherRepository->list(10);
//                return response()->json(['success' => 'Thay đổi thành công.', 'users' => $publishers, 'count' => count($publishers),]);
//            } else {
//                $this->publisherRepository->create($request);
//                $publishers = $this->publisherRepository->list(10);
//                return response()->json(['success' => 'Tạo mới thành công.', 'publishers' => $publishers, 'count' => count($publishers)]);
//            }
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
