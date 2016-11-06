<?php 
use Illuminate\Database\Seeder;
use App\Category;
use App\Faq;
use App\Furnitura;
use App\Link;
use App\News;
use App\Object;
use App\Page;
use App\Uslugi;


class XLSSeeder extends Seeder {

	public function run()
	{
		$xls = 'database/seeds/seeder.xlsm';
		$book = Excel::load($xls, 'UTF-8')->all();

		foreach($book as $sheet)
		{   
			if ($sheet->getTitle() === 'categories') 
			{	Category::truncate();
				foreach($sheet as $row)
				{
					$category = Category::create([
						'id' => $row->id,
						'parent_id' => $row->parent_id,
						'level' => $row->level,
						'type' => $row->type,
						'menutype' => $row->menutype,
						'title' => $row->title,
						'sef' => $row->sef,
						'path' => $row->path,
						'class' => $row->class,
						'body' => $row->body,
						'image' => $row->image,
						'metatitle' => $row->metatitle,
						'metakey' => $row->metakey,
						'metadesc' => $row->metadesc
						]);
    			}
    		}


    		if ($sheet->getTitle() === 'furnitura') 
			{	Furnitura::truncate();
				foreach($sheet as $row)
				{
					if (!empty($row->category_id))
					$menu = Furnitura::create([
						'id' => $row->id,
						'category_id' => $row->category_id,
						'cat2_id' => $row->cat2_id,
						'title' => $row->title,
						'sef' => $row->sef,
						'introtext' => $row->introtext,
						'fulltext' => $row->fulltext,
						'artikul' => $row->artikul,
						'otdelka' => $row->otdelka,
						'pcs' => $row->pcs,
						'description' => $row->description,
						'metatitle' => $row->metatitle,
						'metakey' => $row->metakey,
						'metadesc' => $row->metadesc,
						'hits' => $row->hits,
						]);
    			}
    		}


    		if ($sheet->getTitle() === 'links') 
			{	Link::truncate();
				foreach($sheet as $row)
				{
					if (!empty($row->category_id))
					$menu = Link::create([
						'category_id' => $row->category_id,
						'title' => $row->title,
						'url' => $row->url,
						'sef' => $row->sef,
						'description' => $row->description,
						'version' => $row->version,
						'metatitle' => $row->metatitle,
						'metakey' => $row->metakey,
						'metadesc' => $row->metadesc,
						'hits' => $row->hits,					
						]);
    			}
    		}


    		if ($sheet->getTitle() === 'news') 
			{	News::truncate();
				foreach($sheet as $row)
				{   
					if (!empty($row->category_id))
					$menu = News::create([
						'category_id' => $row->category_id,
						'title' => $row->title,
						'sef' => $row->sef,
						'introtext' => $row->introtext,
						'fulltext' => $row->fulltext,
						'image' => $row->image,
						'metatitle' => $row->metatitle,
						'metakey' => $row->metakey,
						'metadesc' => $row->metadesc,
						'hits' => $row->hits,
						'created_at' => $row->created_at,
						]);
    			}
    		}


    		if ($sheet->getTitle() === 'steklo') 
			{	Page::truncate();
				foreach($sheet as $row)
				{
					if (!empty($row->category_id))
					$menu = Page::create([
						'category_id' => $row->category_id,
						'title' => $row->title,
						'sef' => $row->sef,
						'introtext' => $row->introtext,
						'fulltext' => $row->fulltext,
						'image' => $row->image,
						'metatitle' => $row->metatitle,
						'metakey' => $row->metakey,
						'metadesc' => $row->metadesc,
						'hits' => $row->hits,
						]);
    			}
    		}


    		if ($sheet->getTitle() === 'uslugi') 
			{	Uslugi::truncate();
				foreach($sheet as $row)
				{
					if (!empty($row->category_id))
					$menu = Uslugi::create([
						'category_id' => $row->category_id,
						'title' => $row->title,
						'sef' => $row->sef,
						'introtext' => $row->introtext,
						'fulltext' => $row->fulltext,
						'image' => $row->image,
						'metatitle' => $row->metatitle,
						'metakey' => $row->metakey,
						'metadesc' => $row->metadesc,
						'hits' => $row->hits,
						]);
    			}
    		}


    		if ($sheet->getTitle() === 'faq') 
			{	Faq::truncate();
				foreach($sheet as $row)
				{
					if (!empty($row->category_id))
					$menu = Faq::create([
						'category_id' => $row->category_id,
						'title' => $row->title,
						'sef' => $row->sef,
						'introtext' => $row->introtext,
						'fulltext' => $row->fulltext,
						'image' => $row->image,
						'metatitle' => $row->metatitle,
						'metakey' => $row->metakey,
						'metadesc' => $row->metadesc,
						'hits' => $row->hits,
						]);
    			}
    		}


    		if ($sheet->getTitle() === 'objects') 
			{	Object::truncate();
				foreach($sheet as $row)
				{
					if (!empty($row->category_id))
					$menu = Object::create([
						'category_id' => $row->category_id,
						'title' => $row->title,
						'sef' => $row->sef,
						'introtext' => $row->introtext,
						'fulltext' => $row->fulltext,
						'image' => $row->image,
						'metatitle' => $row->metatitle,
						'metakey' => $row->metakey,
						'metadesc' => $row->metadesc,
						'hits' => $row->hits,
						]);
    			}
    		}

    	}
	}
}