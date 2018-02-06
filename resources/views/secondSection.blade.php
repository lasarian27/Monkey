<section class="secondSection">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>GRETONG</h1>
                <p>----- Online store -----</p>
            </div>
            <div class="col">

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn hov" data-toggle="modal" data-target="#myModal">login</button>

                    </div>
                    <div class="col">

                        <button type="submit" class="btn hov" data-toggle="modal" data-target="#myModal2">register</button>

                    </div>
                    <div class="col">
                        <button type="submit" class="btn hov">My Cart (0) : $ <span id="suma">0</span></button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn ">checkout</button>
                    </div>
                    <div class="w-100"></div>
                    <div class="col wrapper">
                        <input type="text" name="search" placeholder="Search">
                        <input type="image" src="http://freevector.co/wp-content/uploads/2013/03/34148-active-search-symbol.png" width="5%"/>
                    </div>


                </div>
            </div>
            <div class="w-100"></div>
            <div class="col ">
                <ul class="paint">
                    <li >Home</li>
                    <li>New Arrivals</li>
                    <li>Tuxedo</li>
                    <li >Sweater</li>
                    <li >Shoes</li>
                    <li >Glasses</li>
                    <li >T-Shirt</li>
                    <li >Watches</li>
                </ul>
            </div>


        </div>

    </div>
    <!-- Modal -->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header">
                    <h3 class="modal-title">Register your account</h3>

                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputUsernameRegister">Username</label>
                            <input type="text" id="exampleInputUsernameRegister" class="form-control" placeholder="Username"/>
                            <label for="exampleInputEmailRegister">Email</label>
                            <input type="email" id="exampleInputEmailRegister" class="form-control" placeholder="Email"/>
                            <label for="exampleInputPasswordRegister">Password</label>
                            <input type="password" class="form-control" id="exampleInputPasswordRegister" placeholder="Password" />
                            <label for="exampleInputPasswordRe">Re-enter Password</label>
                            <input type="password" class="form-control" id="exampleInputPasswordRe" placeholder="Re-enter Password" />

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default btn-block design">Register</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header">
                    <h3 class="modal-title">Login to your account</h3>

                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmailLogin">Email</label>
                            <input type="email" id="exampleInputEmailLogin" class="form-control" placeholder="Email"/>
                            <label for="exampleInputPasswordLogin">Password</label>
                            <input type="password" class="form-control" id="exampleInputPasswordLogin" placeholder="Password" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default btn-block design">Log In</button>
                </div>
            </div>

        </div>
    </div>
</section>