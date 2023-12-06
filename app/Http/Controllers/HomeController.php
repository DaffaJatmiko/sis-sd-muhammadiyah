<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\News;
use App\Models\Achievement;
use App\Models\Profile;
use App\Models\Extracurricular;
use App\Models\Ppdb;

class HomeController extends Controller
{
   public function index() 
   {
      $facility = Facility::latest()->take(3)->get();
      $news = News::latest()->take(3)->get();
      $achievement = Achievement::latest()->take(3)->get();
      return view('home.index', compact('facility', 'news', 'achievement'));
   }
   public function detailPrestasi($id)
   {
      $achievement = Achievement::find($id);

      if (!$achievement){
         abort(404);
      }

      return view('home.detailPrestasi', compact('achievement'));
   }
   public function detailPublikasi($id)
   {
      $news = News::find($id);

      if (!$news){
         abort(404);
      }

      return view('home.detailPublikasi', compact('news'));
   }
   public function profile() 
   {
      $profile = Profile::first();
      return view('home.profile', compact('profile'));
   }
   public function fasilitas() 
   {
      $facility = Facility::all();
      return view('home.fasilitas', compact('facility'));
   }
   public function ekstrakurikuler() 
   {
      $extracurricular = Extracurricular::all();
      return view('home.ekstrakurikuler', compact('extracurricular'));
   }
   public function publikasi() 
   {
      $news = News::all();
      return view('home.publikasi', compact('news'));
   }
   public function kontak() 
   {
      return view('home.kontak');
   }
   public function ppdb() 
   {
      $ppdb = Ppdb::first();
      return view('home.ppdb', compact('ppdb'));
   }
}
