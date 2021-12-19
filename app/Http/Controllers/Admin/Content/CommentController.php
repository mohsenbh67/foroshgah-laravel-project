<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\CommentRequest;
use App\Models\Content\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->simplePaginate(15);
        return view('Admin.content.comment.index', compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        if ($comment->seen == 0) {
            $comment->seen = 1;
            $comment->save();
        }
        return view('Admin.content.Comment.Show', compact('comment'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function status(Comment $comment)
    {
        $comment->status = $comment->status == 0 ? 1 : 0;
        $result = $comment->save();
        if ($result) {
            if ($comment->status == 0) {
                return response()->json(['status' => true, 'checked' => false ]);
            }else{
                return response()->json(['status' => true, 'checked' => true ]);

            }

        }else{
            return response()->json(['status' => false]);
        }
    }

    public function approved(Comment $comment)
    {
        $comment->approved = $comment->approved == 0 ? 1 : 0;
        $result = $comment->save();
        if ($result) {
            return redirect()->route('admin.content.comment.index')->with('swal-success', 'وضعیت نظر با موفقیت تایید شد');

        }

        else {
            return redirect()->route('admin.content.comment.index')->with('swal-error', 'وضعیت نظر با خطا موتجه شد');

        }
    }

    public function answer(CommentRequest $request, Comment $comment){


        if ($comment->parent_id == null) {
        $inputs = $request->all();
        $inputs['author_id']=1;
        $inputs['parent_id']=$comment->id;
        $inputs['commentable_id']=$comment->commentable_id;
        $inputs['commentable_type']=$comment->commentable_type;
        $inputs['approved']=1;
        $inputs['status']=1;

        $Comment = Comment::create($inputs);
        return redirect()->route('admin.content.comment.index')->with('alert-section-success', 'پاسخ  شما با موفقیت ثبت شد');
     }
     else{
        return redirect()->route('admin.content.comment.index')->with('swal-error', 'خطا');
     }


    }


}
