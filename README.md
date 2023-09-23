<img align="right" src="public/images/laravel_logo.png" width="200">
<img align="right" src="public/images/tailwindcss_logo.png" width="200">

<h1 align="center">
Parallax Scrolling
</h1>

Hi there :wave:

If you're implementing parallax scrolling in Laravel and tailwindcss, you've come to the right place! I started this project as I was working on my portfolio peice. I wanted to showcase my creativity, and I decided that parallax scrolling is modern, poppy, versatile, and overall just pretty darn cool. I thought it would be straightforward or easy to implement, but I was wrong!

Parallax is a term used by astronomers to describe the observed displacement of an object caused by the change of the observer's point of view. Astronomers use the principle of parallax to do things such as measure how far away stars and planets are. Developers use parallax to make stuff look _really_ cool. Now knowing more about what parallax is, I realize that a lot more math goes into creating a smooth and well organized parallax effect than I originally anticipated... I'm reaching for the stars and hoping that one day, this boilerplate project will grow into the perfect parallax template for Laravel and tailwindcss developers.

## Getting Started

install PHP dependencies

```
composer i
```

install node dependencies

```
npm i
```

copy the `.env.example` file to .env

set the application key by running

``` 
php artisan key:generate
```

run laravel sail as a background process

```
./vendor/bin/sail up -d
```

open the project in your browser

```
http://localhost
```

## What's included in the boilerplate?

This boilerplate is built on Laravel v9.2 and uses tailwindcss v3.0.23 and css to acheive a smooth parallax scrolling effect on any element. In `resources/css/parallax.css` you will find seven parallax layers ready for you to use. I've left plenty of comments in my code so that any fellow developers who pick up this boilerplate can easily work in the codebase and have a sense of the vision. 

I've left the built-in Laravel landing page so that you may see how a bit of creativity and time can transform an entire site. In `resources/views/pages/parallax.blade.php` you will find the implementation of tailwindcss and parallax scrolling. Be sure to read the comments - parallax scrolling is very specific on how it likes to be displayed, translated, and scaled. I've included comments on what I have and haven't figured out yet, so please be cautious if you want to rearrange or add more groups because I'm not sure if it wuld continue to display properly. What I've put together is no where near perefct, but it certainly works and looks beautiful!

#### Languages, Frameworks, and Tools used

- Laravel 9
- tailwindcss 3.0

If you're interested to see how the code came to be, check out the git history - the initial commit was immediately following the Laravel installation so that the community can see exactly how I'm using the tools available to us. 

## What's next?

At this time, the translateZ values were picked from good vibes, not math. Next, I will learn the maths behind parallax scrolling so that I may pick the translations values with full understanding of how the layers will interact with each other in the viewport. Then, I will design several templates with excellent documentation, making it easier for anyone to learn and implement the proper basics of parallax.



## License

This boilerplate is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).