<?php

namespace App\Controllers;

use App\Models\MessageModel;
use App\Models\PressModel;
use App\Models\MerchandiseModel;

class Home extends BaseController
{
    public function index()
    {
        // Calling Services
        $session = \Config\Services::session();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://restcountries.com/v3.1/all?fields=name");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $country = json_decode(curl_exec($curl), true);
        $countrysort = array_column($country, 'name');
        array_multisort($countrysort, SORT_ASC, $country);
        curl_close($curl);

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = '30th Yogyakarta Gamelan Festival';
        $data['desc']           = '30th Yogyakarta Gamelan Festival';
        $data['countriesarr']   = $country;
        if (isset($_SESSION['message'])) {
			$data['messagesession'] = $_SESSION['message'];
		}

        // Rendering View
        return view('home', $data);
    }

	public function about()
	{
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Tentang YGF 30';
        $data['desc']           = 'Tentang YGF 30';

		// Rendering View
        return view('about', $data);
	}

	public function program()
	{
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Program YGF 30';
        $data['desc']           = 'Program YGF 30';

		// Rendering View
        return view('program', $data);
        // return view('underconstruction', $data);
	}

	public function news()
	{
		// Calling Models
		$PressModel = new PressModel();

		// Populating Data
		$press = $PressModel->orderBy('created_at', 'DESC')->findAll();

		$url = 'https://news.google.com/rss/search?q=Yogyakarta%20Gamelan%20Festival&hl=id&gl=ID&ceid=ID%3Aid';
		$feeds = simplexml_load_file($url);

		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Berita YGF 30';
        $data['desc']           = 'Berita YGF 30';
		$data['articles']		= $press;
		$data['newses']			= $feeds->channel->item;

		// Rendering View
        return view('news', $data);
        // return view('underconstruction', $data);
	}

	public function newsdetail($slug)
	{
		// Calling Models
		$PressModel = new PressModel();

		// Populating Data
		$article = $PressModel->where('slug', $slug)->first();

		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Berita YGF 30';
        $data['desc']           = 'Berita YGF 30';
		$data['article']		= $article;

		// Rendering View
        return view('newsdetail', $data);
	}

	public function partners()
	{
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Partner YGF 30';
        $data['desc']           = 'Partner YGF 30';

		// Rendering View
        return view('partners', $data);
	}
	
	public function gallery()
	{
		// Populating data
		$dirPath = FCPATH.'/gallery';
		$files = scandir($dirPath);
		
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Gallery YGF 30';
        $data['desc']           = 'Gallery YGF 30';
		$data['files']			= $files;

		// Rendering View
        return view('gallery', $data);
        // return view('underconstruction', $data);
	}
	
	public function day1()
	{
		// Populating data
		$dirPath = FCPATH.'/gallery/day1';
		$files = scandir($dirPath);
		
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Gallery Day 1 YGF 30';
        $data['desc']           = 'Gallery Day 1 YGF 30';
		$data['files']			= $files;

		// Rendering View
        return view('day1', $data);
        // return view('underconstruction', $data);
	}
	
	public function day2()
	{
		// Populating data
		$dirPath = FCPATH.'/gallery/day2';
		$files = scandir($dirPath);
		
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Gallery Day 2 YGF 30';
        $data['desc']           = 'Gallery Day 2 YGF 30';
		$data['files']			= $files;

		// Rendering View
        return view('day2', $data);
        // return view('underconstruction', $data);
	}
	
	public function day3()
	{
		// Populating data
		// $dirPath = FCPATH.'/gallery/day3';
		// $files = scandir($dirPath);
		
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Gallery Day 3 YGF 30';
        $data['desc']           = 'Gallery Day 3 YGF 30';
		// $data['files']			= $files;

		// Rendering View
        return view('day3', $data);
        // return view('underconstruction', $data);
	}
	
	public function day4()
	{
		// Populating data
		$dirPath = FCPATH.'/gallery/day4';
		$files = scandir($dirPath);
		
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Gallery Day 4 YGF 30';
        $data['desc']           = 'Gallery Day 4 YGF 30';
		$data['files']			= $files;

		// Rendering View
        return view('day4', $data);
        // return view('underconstruction', $data);
	}
	
	public function day5()
	{
		// Populating data
		// $dirPath = FCPATH.'/gallery/day5';
		// $files = scandir($dirPath);
		
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Gallery Day 5 YGF 30';
        $data['desc']           = 'Gallery Day 5 YGF 30';
		// $data['files']			= $files;

		// Rendering View
        return view('day5', $data);
        // return view('underconstruction', $data);
	}
	
	public function merchandise()
	{
		// Calling Models
		$MerchandiseModel = new MerchandiseModel();
		
		// Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Gallery YGF 30';
        $data['desc']           = 'Gallery YGF 30';
		$data['merchendises']	= $MerchandiseModel->findAll();

		// Rendering View
        return view('merchandise', $data);
	}

    public function sendmessage()
    {
		// Calling Services
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation =  \Config\Services::validation();
		
        // Calling Models
		$LiveComment = new MessageModel();
		
		if (isset($_SESSION['message'])) {
			if ($request->getPost()) {
				$message = $request->getPost();
				
				if (! $this->validate([
					'name' => ['label' => 'Name', 'rules' => 'required'],
					'email' => ['label' => 'Email', 'rules' => 'required|valid_email'],
					'age' => ['label' => 'Age', 'rules' => 'numeric']
				])) {
					die($validation->getErrors());
				} else {
					$messageuser = [
								'message' => [	'name' => $message['name'],
												'email' => $message['email'],
												'country' => $message['country'],
												'age' => $message['age']
											]
							];
					$submit = [
								'name' => $message['name'],
								'email' => $message['email'],
								'country' => $message['country'],
								'age' => $message['age'],
								'message' => $message['message'],
                                'first' => true
							];
							
					$LiveComment->save($submit);
					die(json_encode($submit));
				}
			}
		} else {
			if ($request->getPost()) {
				$message = $request->getPost();
				
				if (! $this->validate([
					'name' => ['label' => 'Name', 'rules' => 'required'],
					'email' => ['label' => 'Email', 'rules' => 'required|valid_email'],
					'age' => ['label' => 'Age', 'rules' => 'numeric']
				])) {
					die($validation->getErrors());
				} else {
					$messageuser = [
								'message' => [	'name' => $message['name'],
												'email' => $message['email'],
												'country' => $message['country'],
												'age' => $message['age']
											]
							];
					$submit = [
								'name' => $message['name'],
								'email' => $message['email'],
								'country' => $message['country'],
								'age' => $message['age'],
								'message' => $message['message'],
                                'first' => false
							];
							
					$session->set($messageuser);
					$LiveComment->save($submit);
					die(json_encode($submit));
				}
			}
		}
    }

    public function showmessage()
    {
		$LiveComment = new MessageModel();
		$comments = $LiveComment->orderBy('created_at', 'ASC')->findAll();
		
		echo '<ul class="uk-list" style="color:#000;">';
		foreach ($comments as $comment) {
			echo '<li>';
			echo '<span class="uk-text-bold">'.$comment['name'].' :</span> '.$comment['message'];
			echo '</li>';
		}
		echo '</ul>';
    }

    public function softcleatchat()
    {
        $MessageModel = new MessageModel;

        $messages = $MessageModel->findAll();
        foreach ($messages as $message) {
            $MessageModel->delete($message['id']);
        }

        echo 'All chats cleared';
    }

    public function purgechat()
    {
        $MessageModel = new MessageModel;

        $MessageModel->purgeDeleted();

        echo 'All deleted chats cleared';
    }

    public function test()
    {
        $session = \Config\Services::session();
        dd($_SESSION['message']);
    }

    public function clearsession()
    {
        $session = \Config\Services::session();
        $session->remove('message');
    }

	public function migration() {
		echo command('migrate -all');
	}
}
