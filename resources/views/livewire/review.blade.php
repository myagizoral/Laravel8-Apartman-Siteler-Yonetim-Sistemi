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

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                <input style="background-color:orange;" class="input" type="text" placeholder="subject" wire:model="subject"/>
                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                <!--<input type="email" placeholder="Email Address"/>-->

                <textarea style="background-color:orange;"  class="input" wire:model="review" placeholder="your review"></textarea>
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
                <input style="background-color:orange;" style="color:#000000;" class="input" type="text" placeholder="subject" wire:model="subject"/>
                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                <!--<input type="email" placeholder="Email Address"/>-->

                <textarea style="background-color: orange;color:#000000;" class="input" wire:model="review" placeholder="your review"></textarea>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
                <input style="background-color:orange;" style="color:#000000;" class="input" type="text" placeholder="KONU" wire:model="subject"/>
                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                <!--<input type="email" placeholder="Email Address"/>-->

                <textarea style="background-color: orange;color:#000000;" class="input" wire:model="review" placeholder="Yorumuzu Buraya Yazınız"></textarea>
>>>>>>> Stashed changes
                @error('review')<span class="text-danger">{{$message}}</span>@enderror

                @auth
                    <input type="submit" class="btn btn-success" value="save"></input>
<<<<<<< Updated upstream
                @else
                    <a href="/login">For submit review login</a>
=======
                    <br>
                    <br>
                @else
                    <a href="/login">Yorum Yapmak İçin Lütfen Üye Olunuz</a>
>>>>>>> Stashed changes
                @endauth
            </form>
        </div>
    </div>


</div>
