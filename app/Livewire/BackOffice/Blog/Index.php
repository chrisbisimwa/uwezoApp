<?php

namespace App\Livewire\BackOffice\Blog;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use App\Models\BlogPost;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    
    protected $listeners = [
        'deleteBlog',
    ]; 

    public $post_id;
    public $searchTerm;

    public function delete($id){
        $this->post_id= $id;

        $this->confirm('Êtes-vous sûr de vouloir supprimer cette cette actualité ?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'deleteBlog',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function deleteBlog(){
        $post = BlogPost::find($this->post_id);
        $post->delete();
        $this->alert('success', 'Actualité supprimé avec succès', [
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
        //load posts with pagination and search term where title or content (html code) or user author contains the search term
        $posts = BlogPost::where('title', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('content', 'like', '%'.$this->searchTerm.'%')
            ->orWhereHas('author', function($query){
                $query->where('name', 'like', '%'.$this->searchTerm.'%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.back-office.blog.index', compact('posts'));
    }
}
