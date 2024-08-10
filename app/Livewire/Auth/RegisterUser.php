<?php

namespace App\Livewire\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class RegisterUser extends Component implements HasForms
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
                TextInput::make('first_name')
                ->required(),
                TextInput::make('last_name')
                ->required(),
                TextInput::make('course')
                ->required(),
                TextInput::make('year')
                ->required(),
                TextInput::make('block')
                ->required(),
                TextInput::make('email')
                ->email()
                ->unique()
                ->suffixIcon('heroicon-o-at-symbol')
                ->required(),
                TextInput::make('password')
                ->password()
                ->revealable(),
                TextInput::make('confirm_password')
                ->password()
                ->revealable(),


                // ...
            ])
            ->statePath('data');
    }
    public function create(){
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.auth.register-user');
    }
}
