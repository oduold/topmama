<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Comment;

class CommentController extends Controller {
    
    /**
     * 
     * @param integer $id
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function deleteComment($id) {
        try {
            Comment::findOrFail($id)->delete();
        } catch (\Throwable $e) {
            Log::error($e->getMessage());
            return response("resource not found",404);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response('server error',500);
        }
        return response('Deleted Successfully', 200);
    } 
    
    /**
     * TODO update comment operation
     * 
     * @param integer $id
     */
    public function updateComment($id) {
        
    }
}