<?php

namespace App\Livewire;

use App\Models\News;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateNews extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public function mount(): void
    {
        $this->form->fill();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(fn() => Auth::id()),
                FileUpload::make('image')
                    ->directory('newsImage')
                    ->imageEditor()
                    ->openable()
                    ->required(),
                RichEditor::make('post')
                    ->fileAttachmentsDirectory('newsImages')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'bulletList',
                        'h2',
                        'h3',
                        'italic',
                        'orderedList',
                        'strike',
                        'underline',
                    ]),

                // ...
            ])
            ->statePath('data');
    }

    public function create()
    {
        News::create($this->form->getState());
        return back()->with('success', 'success');
    }
    public function render()
    {
        return view('livewire.create-news');
    }
}
