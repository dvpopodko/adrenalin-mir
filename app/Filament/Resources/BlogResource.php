<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog\Blog;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('description')->required(),
                RichEditor::make('article')->columnSpanFull()->required(),
                Textarea::make('important')->required(),
                FileUpload::make('image_first')->directory('amir/img')->required(),
                FileUpload::make('image_second')->directory('amir/img'),
                Select::make('lang')->options([
                    'en' => 'en',
                    'ru' => 'ru'
                ])->default('ru'),
                Select::make('subtypes')->multiple()->relationship('subtypes', 'description')->preload()->required(),
                Hidden::make('user_id')->default(function () {
                    return Auth::id(); // Устанавливаем ID текущего пользователя
                })
                    ->disabled(fn ($context) => $context === 'edit') // Запрещаем изменение при редактировании
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                ImageColumn::make('image_first')->height(50),
                ImageColumn::make('image_second')->height(50),
                TextColumn::make('lang'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
