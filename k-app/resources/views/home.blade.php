@extends('layouts.app')
@section('title')Главная страница@endsection
@section('h1')<h1>Основная страница</h1>@endsection
@section('aside')
    @parent <p>Дополнительный текст только для начальной страницы</p> <!-- эта секция будет только на home.blade.php -->
@endsection 
@section('content')
    <h3>Контент основной страницы</h3>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eveniet, in aut laboriosam nulla, consequatur hic odit minima modi alias illo recusandae nostrum commodi molestiae non maiores dolores nam vero neque optio harum, pariatur distinctio voluptas fuga. Quisquam sapiente praesentium blanditiis culpa nisi maiores omnis suscipit quod dolore doloribus hic, obcaecati facere a dolorum esse exercitationem asperiores laudantium accusantium itaque nulla aspernatur optio ratione quidem. Veniam est delectus non fugit, eaque beatae minima adipisci. Ut eligendi doloribus eaque quo incidunt velit aliquid magni, corrupti laborum non facere eos fuga ipsam assumenda officiis accusamus dolor cumque! Dicta at quaerat, in minima adipisci id eum quam nesciunt fugit voluptas officiis vitae aliquid cupiditate nobis laborum maiores totam, suscipit, quasi qui optio animi voluptate accusantium dolorem iusto. Impedit aut voluptatem sapiente, quisquam, veritatis illo odio porro deserunt labore ut aliquam iure autem voluptates libero, perspiciatis accusamus sint dolorem quasi? Dolorum dolore minus facere.
    </p>
    <h3>Еще одна часть</h3>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eveniet, in aut laboriosam nulla, consequatur hic odit minima modi alias illo recusandae nostrum commodi molestiae non maiores dolores nam vero neque optio harum, pariatur distinctio voluptas fuga. Quisquam sapiente praesentium blanditiis culpa nisi maiores omnis suscipit quod dolore doloribus hic, obcaecati facere a dolorum esse exercitationem asperiores laudantium accusantium itaque nulla aspernatur optio ratione quidem. Veniam est delectus non fugit, eaque beatae minima adipisci. Ut eligendi doloribus eaque quo incidunt velit aliquid magni, corrupti laborum non facere eos fuga ipsam assumenda officiis accusamus dolor cumque! Dicta at quaerat, in minima adipisci id eum quam nesciunt fugit voluptas officiis vitae aliquid cupiditate nobis laborum maiores totam, suscipit, quasi qui optio animi voluptate accusantium dolorem iusto. Impedit aut voluptatem sapiente, quisquam, veritatis illo odio porro deserunt labore ut aliquam iure autem voluptates libero, perspiciatis accusamus sint dolorem quasi? Dolorum dolore minus facere.
    </p>
    <h3>Последняя часть</h3>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eveniet, in aut laboriosam nulla, consequatur hic odit minima modi alias illo recusandae nostrum commodi molestiae non maiores dolores nam vero neque optio harum, pariatur distinctio voluptas fuga. Quisquam sapiente praesentium blanditiis culpa nisi maiores omnis suscipit quod dolore doloribus hic, obcaecati facere a dolorum esse exercitationem asperiores laudantium accusantium itaque nulla aspernatur optio ratione quidem. Veniam est delectus non fugit, eaque beatae minima adipisci. Ut eligendi doloribus eaque quo incidunt velit aliquid magni, corrupti laborum non facere eos fuga ipsam assumenda officiis accusamus dolor cumque! Dicta at quaerat, in minima adipisci id eum quam nesciunt fugit voluptas officiis vitae aliquid cupiditate nobis laborum maiores totam, suscipit, quasi qui optio animi voluptate accusantium dolorem iusto. Impedit aut voluptatem sapiente, quisquam, veritatis illo odio porro deserunt labore ut aliquam iure autem voluptates libero, perspiciatis accusamus sint dolorem quasi? Dolorum dolore minus facere.
    </p>
@endsection