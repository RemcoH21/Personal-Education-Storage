<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
  # Process variable data or parameters
  # Talk to the model
  # Receive from the model
  # Compile or process data from the model if needed
  # Pass that data to the correct view
  public function getIndex() {
      // Post = SELECT * FROM 'posts', so its a table name.
      $post = Post::orderBy('created_at', 'desc')->limit(4)->get();
      return view('pages/welcome')->withPosts($posts);
  }

  public function getAbout() {
      $first = "Remco";
      $last = "Hanenburg";

      $fullname = $first . " " . $last;
      $email = 'remcohanenburg@hotmail.nl';
      $data = [];
      $data['email'] = $email;
      $data['fullname'] = $fullname;
      return view('pages/about')->withData($data);
  }

  public function getContact() {
      return view('pages/contact');
  }


}
