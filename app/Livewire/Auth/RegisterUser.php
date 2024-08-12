<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components\Password;
use Illuminate\Support\Facades\Hash;
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
                FileUpload::make('image')
                ->image()
                ->imageEditor()
                ->directory('profileImage')
                ->imageEditorViewportWidth('1000')
                ->imageEditorViewportHeight('1080'),
                TextInput::make('name')
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
            ])
            ->statePath('data');
    }
    public function create()
    {


        $credintial = $this->form->getState();

        if ($credintial['password'] === $credintial['confirm_password'] ){
            $user = User::create([
                'image' => $credintial['image'],
                'name' => $credintial['name'],
                'email' => $credintial['email'],
                'password' => Hash::make($credintial['password']),
            ]);
            auth()->login($user);
            return redirect()->intended('/');
        }
       $this->addError('password', 'Passwords do not match.');




    }
    public function render()
    {
        return view('livewire.auth.register-user');
    }
}
