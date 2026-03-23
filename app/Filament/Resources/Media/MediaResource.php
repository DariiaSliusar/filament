<?php

namespace App\Filament\Resources\Media;

use App\Filament\Resources\Media\Pages\ManageMedia;
use App\Models\Media;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('link')
                    ->label('Link/URL')
                    ->url()
                    ->placeholder('https://example.com'),
                TextInput::make('icon')
                    ->label('FontAwesome Icon Class')
                    ->helperText('Наприклад: fa-brands fa-facebook, fa-brands fa-instagram, fa-brands fa-linkedin')
                    ->placeholder('fa-brands fa-facebook')
                    ->prefixIcon('heroicon-o-sparkles'),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('link')
                    ->placeholder('-')
                    ->url(fn ($state) => $state)
                    ->openUrlInNewTab(),
                TextEntry::make('icon')
                    ->label('Icon')
                    ->formatStateUsing(fn (?string $state): HtmlString =>
                        $state
                            ? new HtmlString('<div class="flex items-center gap-3"><i class="' . e($state) . ' text-2xl text-primary-500"></i><span class="text-sm text-gray-500">' . e($state) . '</span></div>')
                            : new HtmlString('-')
                    )
                    ->html()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('link')
                    ->searchable()
                    ->url(fn ($state) => $state)
                    ->openUrlInNewTab()
                    ->limit(50),
                TextColumn::make('icon')
                    ->label('Icon')
                    ->formatStateUsing(fn (string $state): HtmlString => new HtmlString(
                        '<div class="flex items-center gap-2"><i class="' . e($state) . ' text-lg text-primary-500"></i><span class="text-xs text-gray-500">' . e($state) . '</span></div>'
                    ))
                    ->html()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageMedia::route('/'),
        ];
    }
}
