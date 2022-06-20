@extends('layout.app')
@section('content')


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
                    <li class="my-2 ">
                        <a href="javascript:toggleDiv('div1');" style="text-decoration: inherit; color: inherit;">
                            <span class="text-white ms-3 fs-5"><b>Menu1</b></span>
                        </a>
                        
                    </li>
                    <li class="my-2">
                        <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div2');">
                            <span class="text-white ms-3 fs-5"><b>Menu2</b></span>
                        </a> 
                    </li>
                    
                    <li class="my-2">
                        <div class="slide">
                            <button class="dropdown-btn"><b>Menu3</b>
                                {{-- <i class="fa fa-caret-down mt-1" style="margin-left: 80px"></i> --}}
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
                    </li>  

                    <li class="my-0">
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
                    </li>  

                    
                    
                </ul>

            </div>
        </div>
        <div class="col py-3" style="background-color:#F0F8FF">
            
            <div class="toggle" id="div1">
                     <p class="lcc-text mt-4">
                        <h1 class="text-center">MENU 1</h1>
                    </p>
                    <p class="lcc-text mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dicta ut ad consequuntur, adipisci dolore deserunt aut hic placeat veritatis sunt quibusdam expedita architecto ipsa a iure omnis, similique itaque aliquid neque quia inventore. Blanditiis obcaecati minima nisi. At exercitationem asperiores odio unde placeat quidem cupiditate pariatur quia? Ad error dignissimos possimus, illo repellendus unde dolore inventore tempore aliquam, perferendis blanditiis maiores ea tenetur voluptatibus animi tempora earum cumque quasi minima ut! Ratione illo pariatur atque molestiae facilis, cum illum voluptate, delectus alias beatae iure fuga rerum explicabo quod, ipsam quos saepe eos nam consequuntur. Molestias, vel unde quam quod, in ipsum facilis harum ex blanditiis reiciendis commodi esse cupiditate repellat rem hic soluta vitae debitis placeat aliquid ratione nobis? Suscipit eos architecto soluta quasi autem deleniti optio alias placeat harum ipsum assumenda hic debitis quos vel laboriosam distinctio, earum qui. Voluptas delectus velit eius itaque quibusdam est, facilis inventore nesciunt numquam nihil veritatis magni voluptatibus ab earum corrupti esse, sunt accusantium dolorem ipsum debitis recusandae in. Laboriosam dicta accusantium nihil sed saepe, iusto culpa, fugiat nobis rem maxime voluptatum voluptates earum doloremque laborum repudiandae. Cupiditate consequatur aperiam quibusdam assumenda! In ipsa ipsam provident, repellat corporis reiciendis modi nesciunt quisquam sunt, quis sequi voluptatum tenetur, repellendus eum porro animi. Quidem veritatis cumque fugit alias facilis repudiandae necessitatibus aut at dolore iste possimus aspernatur recusandae animi pariatur assumenda, omnis, libero earum quos commodi quod velit sit? Quo assumenda blanditiis cum fugiat nesciunt nostrum distinctio explicabo, officia recusandae laboriosam labore ratione impedit ex nihil cumque deserunt inventore architecto maiores reiciendis unde corrupti ea vero? Laboriosam numquam vero earum consectetur quidem quisquam porro quas tempore cumque accusantium minima tempora voluptatum nobis ipsam consequuntur dolores quibusdam asperiores, explicabo aut fugit a accusamus temporibus? Odio, ducimus? Dignissimos deserunt quia, quibusdam recusandae delectus doloribus voluptas omnis?
                    </p>
            </div>
            <div class="toggle" id="div2" style="display: none">
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
             </div>
            
        </div>


    </div>
</div>


@endsection
