<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('img/FAQ.png') }}">
    @include('layouts/header')
    <script src="/js/products.js"></script>
    <title>FAQ</title>
</head>


<body class="faq_body">
    @include('layouts/navbar')
    <div class="container-fluid" id="faq_margin">
        <div class="row faq_head">
            <div class="col-lg-12 mt-4 text-center">
        <h1>FREQUENTLY ASKED QUESTIONS</h1>
               
        </div>
        </div>

            <div class="row dwelling_welcome">
                <div class="col-lg-7 mx-auto mt-3">
                    <h4><strong>What services do you offer?</strong></h4>
            <p>We offer a comprehensive range of architectural services, including residential design, commercial projects, interior design, and more. Our goal is to provide tailored solutions to meet your specific needs.</p>
                </div>
            </div>

            <div class="row dwelling_welcome">
                <div class="col-lg-7 mx-auto mt-3">
                    <h4><strong>Can you provide examples of your previous work?</strong></h4>
            <p>Absolutely! You can explore our portfolio on our website, showcasing a variety of completed projects. This will give you a sense of our design style, quality, and versatility.</p>
                </div>
            </div>

            <div class="row dwelling_welcome">
                <div class="col-lg-7 mx-auto mt-3">
                    <h4><strong>How do you handle project customization?</strong></h4>
            <p>We highly value customization to meet your unique preferences. During the design phase, we collaborate closely with you to incorporate your ideas, ensuring that the final design aligns perfectly with your vision..</p>
                </div>
            </div>
            
            <div class="row dwelling_welcome">
                <div class="col-lg-7 mx-auto mt-3">
                    <h4><strong>What software or tools do you use for design?</strong></h4>
            <p>We leverage advanced design tools, including 3D modeling and virtual reality, to provide a realistic visualization of your project. This enhances your understanding of the design before construction begins.</p>
                </div>
            </div>

            <div class="row dwelling_welcome">
                <div class="col-lg-7 mx-auto mt-3">
                    <h4><strong>What permits and approvals are required, and how are they obtained?</strong></h4>
            <p>We handle all necessary permits and approvals, guiding you through the regulatory process to ensure compliance with local building codes and regulations.</p>
                </div>
            </div>
        </div>
    
    @include('layouts/footer')
</body>
</html>