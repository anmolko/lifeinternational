<div class="main-sidebar rmt-75">
    <div class="widget widget-search wow fadeInUp delay-0-2s">
        <h4 class="widget-title">Search</h4>
        <form  method="get" id="searchform" action="{{route('searchJob')}}" class="default-search-form">
            <input  id="s" name="s" type="text"  placeholder="Find Keywords" oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
            <button type="submit" class="searchbutton far fa-search"></button>
        </form>
    </div>
    {{--    <div class="widget widget-category wow fadeInUp delay-0-4s">--}}
    {{--        <h4 class="widget-title">Category</h4>--}}
    {{--        <ul>--}}
    {{--            @if(!empty($category))--}}
    {{--                @foreach(@$category as $bcategory)--}}
    {{--                    <li><a  class="@if(Request::url() === url('/jobs/categories/'.$bcategory->slug)) active @endif" href="{{url('/blog/categories/'.$bcategory->slug)}}">{{ucwords(@$bcategory->name)}}</a> <span>({{@$bcategory->blogs->count()}})</span></li>--}}
    {{--                @endforeach--}}
    {{--            @endif--}}
    {{--        </ul>--}}
    {{--    </div>--}}

    @if(count($latestJobs)>0)
    <div class="widget widget-recent-news wow fadeInUp delay-0-2s">
        <h4 class="widget-title">Recent Jobs</h4>
        <ul>
            @foreach($latestJobs as $index => $latest)
                <li>
                    <div class="image">
                        <img src="{{ ($latest->image !== null) ? asset('/images/job/'.@$latest->image): asset('assets/frontend/images/win.png')}}" alt="News">
                    </div>
                    <div class="content">
                        <h5><a href="{{route('job.single',@$latest->slug)}}">{{ucwords(@$latest->name)}}</a></h5>
                        <p class="category" style="margin-top: 5px; margin-bottom: 1px">
                            <i class="far fa-list-alt"></i>
                            @if($job->getJobCategories($job->category_ids) !== 'N/A')
                                <a href="{{route('job.single',@$latest->slug)}}">{{ucwords(@$job->getJobCategories($job->category_ids))}}</a>
                            @endif
                        </p>
                        <span class="date">
                            <i class="far fa-calendar-alt"></i>
                            <a href="{{route('job.single',@$latest->slug)}}">
                                 @if(@$job->end_date >= $today)
                                    {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                @else
                                    Expired
                                @endif
                            </a>
                        </span>

                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
