<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\MemoResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Memo;

class MemoController extends Controller
{
    /**
     * メモ一覧取得するAPI
     * @param  Request $request
     * @return MemoResource
     */
    public function index(Request $request) {

        return MemoResource::collection($request->user()->memos()->with(['user'])->get());
    }

    /**
     * メモ一件取得するAPI
     * @param  Memo $memo
     * @return MemoResource
     */
    public function show(Memo $memo)
    {
        $memo->load(['user']);
        return new MemoResource($memo);
    }
}
