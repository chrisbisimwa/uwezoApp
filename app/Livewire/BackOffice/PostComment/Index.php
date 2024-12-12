<?php

namespace App\Livewire\BackOffice\PostComment;

use App\Models\BlogComment;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $comment_id;
    public $searchTerm;

    protected $listeners = [
        'approveComment',
        'rejectComment',
        'deleteComment',
    ];

    public function approve($id)
    {
        $this->comment_id = $id;
        $this->confirm('Êtes-vous sûr de vouloir approuver ce commentaire?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'approveComment',
            'onCancelled' => 'cancelled'
        ]);
       
    }


    public function approveComment()
    {
        $comment = BlogComment::find($this->comment_id);
        $comment->update([
            'status' => 'approved'
        ]);

        $this->alert('success', 'Commentaire approuvé avec succès', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function reject($id)
    {
        $this->comment_id = $id;
        $this->confirm('Êtes-vous sûr de vouloir rejeter ce commentaire?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'rejectComment',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function rejectComment()
    {
        $comment = BlogComment::find($this->comment_id);
        $comment->update([
            'status' => 'rejected'
        ]);

        $this->alert('success', 'Commentaire rejeté avec succès', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function delete($id)
    {
        $this->comment_id = $id;
        $this->confirm('Êtes-vous sûr de vouloir supprimer ce commentaire?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'deleteComment',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function deleteComment()
    {
        $comment = BlogComment::find($this->comment_id);
        $comment->delete();
        $this->alert('success', 'Commentaire supprimé avec succès', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function render()
    {

        //load comments with pagination and search in comment content, comment author or comment blogPost if searchTerm is not empty 
        $comments = BlogComment::where('content', 'like', '%'.$this->searchTerm.'%')
            ->orWhereHas('user', function($query){
                $query->where('name', 'like', '%'.$this->searchTerm.'%');
            })
            ->orWhereHas('blogPost', function($query){
                $query->where('title', 'like', '%'.$this->searchTerm.'%');
            })
            ->latest()
            ->paginate(10);
        return view('livewire.back-office.post-comment.index', compact('comments'));
    }
}
