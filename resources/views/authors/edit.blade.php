@extends('layouts.app')
@section('title', 'Modifier un Auteur')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-100">
    <form action="{{ route('authors.update', $author) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet de l'auteur</label>
            <input type="text" name="nom" value="{{ $author->nom }}" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Biographie</label>
            <textarea name="bibliographie" rows="5" value="{{ $author->bibliographie }}" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Décrivez brièvement l'auteur...">{{ $author->bibliographie }}</textarea>
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('authors.index') }}" class="flex-1 text-center py-3 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition">Annuler</a>
            <button type="submit" class="flex-1 bg-indigo-600 text-white py-3 rounded-lg font-bold hover:bg-indigo-700 transition shadow-lg">Enregistrer l'auteur</button>
        </div>
    </form>
</div>
@endsection