<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    @if(session()->has('message'))
        <div>
            {{session('message')}}
        </div>
    @endif

    <div class="tab-pane fade active in" id="reviews">
        <div class="col-sm-12">
            <ul>

            </ul>

            <form wire:submit.prevent="store">
                @csrf

                <input style="background-color:orange;" class="input" type="text" placeholder="subject" wire:model="subject"/>
                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                <!--<input type="email" placeholder="Email Address"/>-->

                <textarea style="background-color:orange;"  class="input" wire:model="review" placeholder="your review"></textarea>
                @error('review')<span class="text-danger">{{$message}}</span>@enderror

                @auth
                    <input type="submit" class="btn btn-success" value="save"></input>
                @else
                    <a href="/login">For submit review login</a>
                @endauth
            </form>
        </div>
    </div>


</div>
