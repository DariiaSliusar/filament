<?php

namespace App\Filament\Resources\AboutMes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutMeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                FileUpload::make('home_image')
                    ->image(),
                FileUpload::make('banner_image')
                    ->image(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('address'),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('summary')
                    ->columnSpanFull(),
                Textarea::make('tagline')
                    ->columnSpanFull(),
                TextInput::make('cv'),
            ]);
    }
}
