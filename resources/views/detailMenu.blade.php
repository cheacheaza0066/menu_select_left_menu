@extends('layout.app')
@section('content')

                                {{-- <i class="fa fa-caret-down mt-1" style="margin-left: 80px"></i> --}}


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="px-3 pt-2 min-vh-100">
                
                <form action="{{route('home')}}" method="get">
                    
                    <button type="submit" class="astext mb-3  ms- fs-5 d-none d-sm-inline text-white">
                        <i class="fa fa-chevron-circle-left ms-0" style="font-size:20px;color:rgb(255, 255, 255)">
                        </i><span class="ms-1">BACK</span></button>


                </form>

                <ul class="nav nav-pills flex-column mb-sm-auto mt-5 mb-0 align-items-center align-items-sm-start" id="menu">
                    @php
                        $i=1;
                        
                    @endphp
                    @foreach($menuLeft_parent1 as $row)
                    <li class="my-2 ">
                        <a href="javascript:toggleDiv('div{{$i++}}');" style="text-decoration: inherit; color: inherit;">
                            <span class="text-white ms-3 fs-5"><b>{{$row->title_menu}}</b></span>
                        </a>
                    </li>
                    @endforeach
                        <li class="my-2">
                            <div class="slide">
                                <button class="dropdown-btn"><b>เมนูที่ 3</b>
                                </button>
                                    <div class="dropdown-container ms-3" style="display: none">
                                        @foreach($menuLeft_parent2 as $row)

                                            <a href="javascript:toggleDiv('div{{$i++}}');" style="text-decoration: inherit; color: inherit;">
                                                <span class="small text-white ms-3 fs-6"><b>{{$row->title_menu}}</b></span>
                                            </a>
                                            @endforeach

                                    </div>
                            </div>   
                        </li>  
                            <li class="my-0">
                                <div class="slide">
                                    <button class="dropdown-btn"><b class="">เมนูที่ 4</b>
                                    </button>
                                        <div class="dropdown-container ms-3"style="display: none">
                                        
                                            <button class="dropdown-btn"><b style="margin-left: 10px">เมนู 4.1</b>
                                            </button>
                                                <div class="dropdown-container ms-5" style="display: none">
                                                    @foreach($menuLeft_parent3 as $row)
                                                        <a href="javascript:toggleDiv('div{{$i++}}');" style="text-decoration: inherit; color: inherit;">
                                                            <span class="small text-white ms-3 fs-6"><b>{{$row->title_menu}}</b></span>
                                                        </a>
                                                    @endforeach
                                                

                                                </div>
                                    
                                        </div>
                                            
                                </div>   
                            </li>  
                    
                   
                   
                    
                    {{-- <li class="my-2">
                        <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div2');">
                            <span class="text-white ms-3 fs-5"><b>Menu2</b></span>
                        </a> 
                    </li> --}}
                    
                    {{-- <li class="my-2">
                        <div class="slide">
                            <button class="dropdown-btn"><b>Menu3</b>
                            </button>
                                <div class="dropdown-container ms-3" style="display: none">
                                    <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div3');">
                                        <span class="text-white"><b>Menu3.1</b></span>
                                    </a>
                                    
                                    <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div4');">
                                        <span class="text-white"><b>Menu3.2</b></span>
                                    </a>
                           
                                </div>
                        </div>   
                    </li>   --}}

                    {{-- <li class="my-0">
                        <div class="slide">
                            <button class="dropdown-btn"><b>Menu4</b>
                            </button>
                                <div class="dropdown-container ms-3"style="display: none">
                                   
                                    <button class="dropdown-btn"><b>Menu4.1</b>
                                    </button>
                                        <div class="dropdown-container ms-5" style="display: none">
                                            <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div5');">
                                                <span class="text-white"><b>Menu4.1.1</b></span>
                                            </a>
                                            <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div6');">
                                                <span class="text-white"><b>Menu4.1.2</b></span>
                                            </a>
                                            <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div7');">
                                                <span class="text-white"><b>Menu4.1.3</b></span>
                                            </a>
                                          

                                        </div>
                              
                                </div>
                                    
                        </div>   
                    </li>   --}}

                    
                    
                </ul>

            </div>
        </div>
        @php
            $b=1;
        @endphp
        

        <div class="col py-3" style="background-color:#F0F8FF"  style="display: none">
            <div class="toggle" id="div0" >
                <p class="lcc-text mt-4">
                    <h1 class="text-center">มาตรฐาน 1</h1>
                </p>
                <p class="mt-4">
                    What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin lit                </p>
             </div>
             {{-- @foreach($menu1 as $row1)
                
             <div class="toggle" id="div0">
                     <p class="lcc-text mt-4">
                         <h1 class="text-center">{{$row1->headContent}}</h1>
                     </p>
                     <p class="lcc-text mt-4">
                         {{$row1->content}}
                     </p>
             </div>
             @endforeach --}}

            @foreach($menu as $row)
                
                    <div class="toggle" id="div{{$b++}}"style="display: none">
                            <p class="lcc-text mt-4">
                                <h1 class="text-center">{{$row->headContent}}</h1>
                            </p>
                            <p class="lcc-text mt-4">
                                {{$row->content}}
                            </p>
                    </div>
                    @endforeach
                    
                    
            {{-- <div class="toggle" id="div2" style="display: none">
                <p class="lcc-text mt-4">
                    <h1 class="text-center">MENU 2</h1>
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eius tenetur
                    odit amet eveniet porro repellendus eaque mollitia, quasi exercitationem 
                    cupiditate. Eius sit enim perferendis architecto adipisci aspernatur eos 
                    at recusandae consequuntur hic provident tempora soluta nobis modi temporibus, 
                    id fugiat, quo vel iure tempore possimus, odit consequatur itaque. Incidunt hic
                     quia, unde accusantium labore veritatis, sint dolor repellat sed neque vitae error voluptatem explicabo quos nostrum veniam fuga pariatur reprehenderit, consequuntur aperiam a. Tempore laboriosam commodi quas expedita odio laudantium modi earum saepe vel! Accusantium ipsa facere, animi dolorum quia libero quibusdam quod consequatur non natus tenetur illo reprehenderit voluptates corporis incidunt iste provident autem delectus enim aliquam. Ad ex quaerat quod nihil voluptatum, molestiae, quam modi inventore rerum facilis quos vero harum est deserunt ratione perferendis fugiat numquam autem nemo. Obcaecati quis mollitia natus alias iste sunt rem hic laborum earum vel! Cum rerum perspiciatis totam maxime dignissimos, eos blanditiis possimus? Ducimus reprehenderit voluptatibus nobis. Quia aperiam iure praesentium dolorum deleniti, est exercitationem error officiis. Officia, ratione soluta. Ea excepturi delectus deserunt facilis quod nihil, fugit maiores doloremque expedita tenetur, reiciendis deleniti sunt aliquam aspernatur dolore sapiente id laboriosam molestiae maxime consequuntur veniam quam quidem nobis. Assumenda, accusantium.
                </p>
             </div>
             <div class="toggle" id="div3" style="display: none">
                <p class="lcc-text mt-4">
                    <h1 class="text-center">MENU 3.1</h1>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam delectus a
                    speriores nobis hic cumque laborum, temporibus quam? Delectus nesciunt eius
                     quis repellat unde incidunt aut similique error cum est vitae quia sed, distinctio reprehenderit omnis, atque sint. Excepturi perspiciatis dignissimos minima. Maxime aliquam voluptate alias voluptas atque esse, voluptatibus itaque.
                </p>
             </div>
             <div class="toggle" id="div4" style="display: none">
                <p class="lcc-text mt-4">
                    <h1 class="text-center">MENU 3.2</h1>
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, molestias quis! Beatae facilis minus itaque. Nisi, doloremque cupiditate magnam pariatur earum placeat nesciunt deleniti itaque assumenda, ex sequi quaerat repellendus porro dignissimos hic maiores a voluptatibus. Saepe reprehenderit adipisci omnis repellendus officia nulla perferendis architecto molestiae natus. Vitae in, rem quibusdam recusandae soluta id ducimus eveniet suscipit accusantium, praesentium cupiditate corrupti ab veritatis ex voluptatem autem. Libero inventore id, aut cupiditate deleniti in voluptatem. Magnam totam tempora dignissimos maxime molestiae quisquam hic nam porro mollitia. Cupiditate quod, atque expedita officia, doloremque minima maiores, consectetur labore odio officiis nesciunt illum fugiat?
                </p>
             </div>
             <div class="toggle" id="div5" style="display: none">
                <p class="lcc-text mt-4">
                    <h1 class="text-center">MENU 4.1.1</h1>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo iure dignissimos consectetur, sit dolore, quae ex sequi corrupti repudiandae eum vitae ratione excepturi sint nemo necessitatibus, labore maxime aspernatur? Beatae, sequi, vero rem repellat sed laborum nihil repellendus non quis atque explicabo, eveniet doloribus doloremque similique nesciunt eius odio veritatis ex. Natus, nulla vel placeat corrupti itaque labore earum, incidunt amet quam delectus odio accusamus error nemo harum, voluptatem optio omnis? Sed, adipisci dolorum laboriosam animi nostrum beatae voluptatum deleniti quod iste aspernatur laudantium, distinctio eveniet laborum maxime delectus aut. Inventore voluptates eveniet ipsam doloribus omnis totam corrupti iste. Minus!
                </p>
             </div>
             <div class="toggle" id="div6" style="display: none">
                <p class="lcc-text mt-4">
                    <h1 class="text-center">MENU 4.1.2</h1>
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, molestias quis! Beatae facilis minus itaque. Nisi, doloremque cupiditate magnam pariatur earum placeat nesciunt deleniti itaque assumenda, ex sequi quaerat repellendus porro dignissimos hic maiores a voluptatibus. Saepe reprehenderit adipisci omnis repellendus officia nulla perferendis architecto molestiae natus. Vitae in, rem quibusdam recusandae soluta id ducimus eveniet suscipit accusantium, praesentium cupiditate corrupti ab veritatis ex voluptatem autem. Libero inventore id, aut cupiditate deleniti in voluptatem. Magnam totam tempora dignissimos maxime molestiae quisquam hic nam porro mollitia. Cupiditate quod, atque expedita officia, doloremque minima maiores, consectetur labore odio officiis nesciunt illum fugiat?
                </p>
             </div>
             <div class="toggle" id="div7" style="display: none">
                <p class="lcc-text mt-4">
                    <h1 class="text-center">MENU 4.1.3</h1>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ad fugiat dolorem voluptatum similique saepe accusantium, laudantium commodi animi necessitatibus reiciendis voluptate, architecto dolor neque eveniet aperiam alias iure modi sunt eos? Quis hic provident quia rerum iste molestias ratione!
                </p>
             </div> --}}
            
        </div>


    </div>
</div>


@endsection
