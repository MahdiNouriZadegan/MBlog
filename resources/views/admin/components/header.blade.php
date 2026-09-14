<section class="header d-flex px-5 align-items-center justify-content-between">
    <section>
        <a href=""><img src="{{asset('images/large-logo.png')}}" class="logo" alt=""></a>
    </section>
    <section>
        <section class="user-dropdown" x-data="adminDropDown()">
                <span @click.away="visible=false" x-on:click="visible = !visible">Admin <small><i
                            x-bind:class="visible == false ? 'fa-chevron-down' : 'fa-chevron-up'"
                            class="fa"></i></small></span>
            <section x-show="visible" class="user-drop" x-transition:enter.duration.400ms>
                <form action="">
                    <button class="logout-btn" type="submit">Logout <i class="px-2 fa fa-sign-out"></i></button>
                </form>
            </section>
        </section>
    </section>
</section>
