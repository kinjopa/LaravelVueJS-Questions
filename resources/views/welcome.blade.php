@extends('layouts.app')
@section('content')
    <main class="rsp-container w-full flex-1">
        <main class="main-content md:pt-3">
            <div class="main-column position-relative clearfix">
                <section class="mb-4 rounded-normal rsp-eql-desktop baseDark">
                    <header class="p-4 pb-3">
                        <div class="text-medium strong break-words lh-spacy">👋Задать вопрос</div>
                    </header>
                    <form id="wallIndexForm" class="askForm" autocomplete="off" data-action="FormXHRSubmit"
                          action="https://ask.fm/account/shoutout" accept-charset="UTF-8" method="post"><input
                            name="utf8" type="hidden" value="&#x2713;"/><input type="hidden" name="authenticity_token"
                                                                               value="oXjRZe7PQfKnv7VMyTeoxtmdjmGRPsRq4mW/Jvm9OmxOJe5QjkbgfCpsCW7FYPp7hok9iwL6JMmyIzqUoCt2+A=="/>

                        <div class="textBlock bg-white p-2 position-relative mh-4 rounded-small mt-4 lg:mt-0">
    <textarea placeholder="Задать вопрос всем пользователям.." data-counter=".optionsBar-counter" data-limit="300"
              style="min-height:60px;height:20px" data-atcomplete="https://ask.fm/account/friends/autocomplete"
              name="question[question_text]" id="question_question_text">
                    </textarea>
                        </div>
                        <div class="optionsBar d-flex p-4 gap-1 md:gap-4 flex-items-center justify-between">
                            <div class="flex-1"><input name="question[question_type]" type="hidden" value="shoutout"/>
                                <label for="shoutout_question_anonymous"></label></div>
                            <div class="optionsBar-counter text-small"></div>
                            <button name="button" type="submit"
                                    class="btn btn-danger min-w-0 icon-send rsp-eql-desktop"
                                    style="width: 100px">Отправить
                            </button>
                        </div>
                        <div class="captcha-container " style="display:none"
                             data-url="https://ask.fm/account/shoutout/captcha"></div>

                    </form>
                </section>

                <div class="item-page">
                    <article class="item streamItem streamItem-answer shorten">
                        <div class="streamItem_origin">Your friend <span class="icon-like"></span> this answer</div>

                        <header class="streamItem_header" dir="ltr">
                            <h3>&quot;У вас нет сердца, а я чуть было не вручила вам своё&quot;. Знаете, у меня была
                                ситуация, когда
                                меня любили чистым сердцем, а я при этом ничего не испытывала. Что вы делаете в таких
                                ситуациях? Как
                                лучше поступить? Уместно ли здесь &quot;лучше остаться с тем, кто любит тебя, а не кого
                                любишь ты
                                &quot;? Что думаешь?</h3>

                        </header>
                        <div class="streamItem_properties">


                            <div class="streamItem_avatar"><a class="userAvatar"
                                                              href="https://ask.fm/Darksia_Sanilas"><img
                                        loading="lazy" alt="Darksia_Sanilas’s Profile Photo"
                                        src="https://cuad.ask.fm/077/36d3b/a7a6/4f54/b819/2e80b185864b/thumb_big/198392.jpg"/></a>
                            </div>
                            <div class="streamItem_details util-table-cell-ellipsis">
                                <div class="streamItem_meta streamItem_meta-owner">
                                    <a class="userCard d-flex max-w-fit flex-items-center gap-1 ellipsis strong text-normal "
                                       href="https://ask.fm/Darksia_Sanilas">Darksia Sanilas</a>
                                </div>


                                <a class="streamItem_meta" href="https://ask.fm/Darksia_Sanilas/answers/152530926070">
                                    <time datetime="2019-02-24T09:35:51">February 24, 2019</time>
                                </a>
                            </div>


                        </div>

                        <div class="streamItem_content">Нет. Никогда не стоит быть из жалости к чувствам с человеком, к
                            которому нет
                            любви. Вы возненавидите его за его навязчивость, сюсюканье, попытки навязать вам свои
                            проявления
                            любви,
                            которая вам не нужна и, особенно, за попытки вызвать у вас взаимность и проявлять лицемерие.
                            Через время
                            этот человек начнёт выпрашивать у вас взаимности, ныть, что своим безразличием ты причиняешь
                            ему
                            боль.
                            Что разрушаешь надежды, которые он сам себе напридумывал о том, что мол ты привыкнешь и
                            полюбишь
                            его.
                            Тебе придётся заниматься лицемерием и моральным насилием над собой, чтобы ему, видите ли,
                            было
                            не так
                            плохо от собственного эгоизма. <br/>&quot;...Милосердием и добротой<br/>Изнасилуют нервы до
                            дыр.<br/>Стоит
                            помнить, что донор - изгой,<br/>Паразит всегда будет кумир.&quot; (с)
                            <hr/>
                            Он превратит вашу жизнь в Ад, а вы, в отместку, его. И с итоге измотаете друг другу все
                            нервы и
                            со
                            скандалом уйдёте и бросите его ради, когда сами полюбите кого-то другого.<br/>Жизнь с
                            нелюбимым
                            человеком - это пытка. Ведь в любимом нравятся даже недостатки, а в нелюбимом - бесят и
                            достоинства.<p
                                class="readMore position-absolute"><a class="d-block bg-white strong text-normal pl-4"
                                                                      data-action="ReadMore" href="#">View more</a></p>
                        </div>


                        <div class="streamItem_footer popover_container simpleFormSection-splitter mt-2">
                            <div class="heartButton"><a class="icon-like" title="Like" data-action="AnswerLikeToggle"
                                                        data-url="https://ask.fm/Darksia_Sanilas/answers/152530926070/likes"
                                                        href="#"></a><a class="counter"
                                                                        href="https://ask.fm/Darksia_Sanilas/answers/152530926070"><i
                                        class="fa fa-heart" style="color: red;margin-right: 5px"></i>11</a>
                            </div>
                            <div class="rewardButton"><a class="icon-reward" title="Reward"
                                                         data-action="AnswerRewardToggle"
                                                         data-url="https://ask.fm/Darksia_Sanilas/answers/152530926070/rewards"
                                                         data-error-message="Action couldn’t be performed" href="#"></a><a
                                    class="counter" style="display:none"
                                    href="https://ask.fm/Darksia_Sanilas/answers/152530926070">0</a>
                            </div>
                            <a title="More" class="icon-more streamItem_option ml-3 pl-4" data-action="PopoverOpen"
                               href="#"></a>
                            <nav class="popover right" style="display:none"><a class="icon-flag" data-action="PopupOpen"
                                                                               data-url="https://ask.fm/Darksia_Sanilas/answers/152530926070/flag"
                                                                               href="#">Report post</a><a
                                    class="rsp-lte-tablet streamItem_option icon-reask" data-action="ButtonPostOnce"
                                    data-url="https://ask.fm/account/shoutout" data-method="put"
                                    data-params="{&quot;question[question_text]&quot;:&quot;\&quot;У вас нет сердца, а я чуть было не вручила вам своё\&quot;. Знаете, у меня была ситуация, когда меня любили чистым сердцем, а я при этом ничего не испытывала. Что вы делаете в таких ситуациях? Как лучше поступить? Уместно ли здесь \&quot;лучше остаться с тем, кто любит тебя, а не кого любишь ты \&quot;? Что думаешь?&quot;}"
                                    title="Forward the question" href="#"><span>Forward the question</span></a><a
                                    class="rsp-eql-desktop streamItem_option icon-reask" data-action="PopupOpen"
                                    data-url="https://ask.fm/account/shoutout" data-method="put"
                                    data-params="{&quot;question[question_text]&quot;:&quot;\&quot;У вас нет сердца, а я чуть было не вручила вам своё\&quot;. Знаете, у меня была ситуация, когда меня любили чистым сердцем, а я при этом ничего не испытывала. Что вы делаете в таких ситуациях? Как лучше поступить? Уместно ли здесь \&quot;лучше остаться с тем, кто любит тебя, а не кого любишь ты \&quot;? Что думаешь?&quot;}"
                                    title="Forward the question" href="#"><span>Forward the question</span></a></nav>

                        </div>
                    </article>
                </div>
            </div>
            <aside class="aside-bottom">
                <section class="section rsp-eql-desktop">
                    <h3 class="section_title section_title-leaders pb-2 mb-1">🇷🇺 Leaderboard</h3>
                    <a class="item text-small pv-1 d-flex justify-between flex-items-center mb-1" id=""
                       href="https://ask.fm/id81297005">
                        <div class="text-gray-600 align-center" style="width: 30px">1</div>
                        <img loading="lazy" alt="id81297005’s Profile Photo" class="userAvatar"
                             src="https://cuad.ask.fm/e7f/76e01/475b/4bcd/ac3c/2b977f6fa16b/thumb_big/17510.jpg"/>
                        <div class="userItem_content flex-1 min-w-0 mr-2"><span
                                class="userName text-white d-flex max-w-fit flex-items-center gap-1 ">Екатерина Чугуева</span><span
                                dir="ltr" class="text-gray-600">@id81297005</span></div>
                        <div class="strong text-white">+287&nbsp;990&nbsp;🔥</div>
                    </a><a class="item text-small pv-1 d-flex justify-between flex-items-center mb-1" id=""
                           href="https://ask.fm/aska705800">
                        <div class="text-gray-600 align-center" style="width: 30px">2</div>
                        <img loading="lazy" alt="aska705800’s Profile Photo" class="userAvatar"
                             src="https://cuad.ask.fm/ad5/96202/4040/41f4/814d/fd9c4d312100/thumb_big/184041.jpg"/>
                        <div class="userItem_content flex-1 min-w-0 mr-2"><span
                                class="userName text-white d-flex max-w-fit flex-items-center gap-1 ">Call Me Angel</span><span
                                dir="ltr" class="text-gray-600">@aska705800</span></div>
                        <div class="strong text-white">+38&nbsp;203&nbsp;🔥</div>
                    </a><a class="item text-small pv-1 d-flex justify-between flex-items-center mb-1" id=""
                           href="https://ask.fm/minik_5050">
                        <div class="text-gray-600 align-center" style="width: 30px">3</div>
                        <img loading="lazy" alt="minik_5050’s Profile Photo" class="userAvatar"
                             src="https://cuad.ask.fm/39b/9c120/a068/42cd/a00c/8206ce84ea9c/thumb_big/74910.jpg"/>
                        <div class="userItem_content flex-1 min-w-0 mr-2"><span
                                class="userName text-white d-flex max-w-fit flex-items-center gap-1  userVerified">⋆*✮.М❀ℕi̾kA.✮*⋆</span><span
                                dir="ltr" class="text-gray-600">@minik_5050</span></div>
                        <div class="strong text-white">+35&nbsp;290&nbsp;🔥</div>
                    </a><a class="item text-small pv-1 d-flex justify-between flex-items-center mb-1" id=""
                           href="https://ask.fm/ognevstepan">
                        <div class="text-gray-600 align-center" style="width: 30px">4</div>
                        <img loading="lazy" alt="ognevstepan’s Profile Photo" class="userAvatar"
                             src="https://cuad.ask.fm/477/fdc20/f105/4493/94e2/4607a99e382b/thumb_big/245154.jpg"/>
                        <div class="userItem_content flex-1 min-w-0 mr-2"><span
                                class="userName text-white d-flex max-w-fit flex-items-center gap-1 ">ваш вишнёвый друг ❣</span><span
                                dir="ltr" class="text-gray-600">@ognevstepan</span></div>
                        <div class="strong text-white">+33&nbsp;665&nbsp;🔥</div>
                    </a><a class="item text-small pv-1 d-flex justify-between flex-items-center mb-1" id=""
                           href="https://ask.fm/kali_ka_talina">
                        <div class="text-gray-600 align-center" style="width: 30px">5</div>
                        <img loading="lazy" alt="kali_ka_talina’s Profile Photo" class="userAvatar"
                             src="https://cuad.ask.fm/1ba/c5e90/a6f1/4d12/84cf/3146d2595a46/thumb_big/239277.jpg"/>
                        <div class="userItem_content flex-1 min-w-0 mr-2"><span
                                class="userName text-white d-flex max-w-fit flex-items-center gap-1  userVerified">⠀༺ Ｋａ♱ａｌｉｎａ ༻⠀</span><span
                                dir="ltr" class="text-gray-600">@kali_ka_talina</span></div>
                        <div class="strong text-white">+30&nbsp;770&nbsp;🔥</div>
                    </a>
                    <p><a class="more" href="https://ask.fm/account/leaders/country?auto_scroll=%23currentUserItem">See
                            all</a></p>
                </section>
            </aside>
        </main>
    </main>
@endsection
