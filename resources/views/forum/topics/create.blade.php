{{--
    Copyright 2015-2017 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master', [
    'bodyAdditionalClasses' => 't-forum-'.$forum->categorySlug(),
])

@section('content')
    {!! Form::open([
        "url" => route("forum.topics.store", ['forum_id' => $forum]),
        'data-remote' => true,
    ]) !!}
        <input type="hidden" name="cover_id" class="js-forum-cover--input">

        @include('forum.topics._header')

        <div id="topic-post-form" class="osu-layout__row">
            <div class="forum-post">
                @if (Auth::user()->isSpecial())
                    <div
                        class="forum-post__stripe"
                        style="{{ user_color_style(Auth::user()->user_colour, "background-color") }}"
                    ></div>
                @endif

                @include("forum.topics._post_info", ["user" => Auth::user(), "options" => ["large" => true]])

                <div class="forum-post__body">
                    <div class="forum-post__preview js-post-preview--box hidden">
                        <div class="forum-post__content forum-post__content--header">
                            {{ trans('forum.topics.create.preview') }}
                        </div>
                        <div class="forum-post__content forum-post__content--main">
                            <div class="forum-post-content js-post-preview--body">
                            </div>
                        </div>
                    </div>
                    <div class="forum-post__content">
                        @include('forum.posts._form_body', ['postBody' => [
                            'content' => $post->post_text,
                            'focus' => true,
                            'extraClasses' => 'js-post-preview--auto forum-post-content--edit',
                            'extraAttrs' => 'tabindex="1"',
                        ]])
                    </div>

                    <div class="forum-post__content forum-post__content--poll-create">
                        @include('forum.topics._create_poll', ['edit' => false])
                    </div>

                    <div class="forum-post__content forum-post__content--edit-bar forum-post__content--edit-bar-create">
                        @include('forum.topics._post_box_footer', [
                            'submitText' => trans('forum.topic.create.submit'),
                        ])
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
