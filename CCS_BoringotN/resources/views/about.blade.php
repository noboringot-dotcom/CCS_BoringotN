@extends('layout')
@section('body-class', 'about-bg')

@section('content')
    <h2>About CCS</h2>

    <div class="programs">
        <div class="program-card">
            <img src="{{ asset('images/cs.png') }}" alt="Computer Science">
            <h3>Computer Science</h3>
            <p>
                The BS Computer Science program includes the study of computing concepts and theories, 
                algorithmic foundations and new developments in computing. The program prepares students to 
                design and create algorithmically complex software and develop new and effective algorithms 
                for solving computing problems.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="program-card">
            <img src="{{ asset('images/it.png') }}" alt="Information Technology">
            <h3>Information Technology</h3>
            <p>
                The BS Information Technology program includes the study of the utilization of both hardware 
                and software technologies involving planning, installing, customizing, operating, managing and 
                administering, and maintaining information technology infrastructure that provides computing 
                solutions to address the needs of an organization.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="program-card">
            <img src="{{ asset('images/IS.png') }}" alt="Information Systems">
            <h3>Information Systems</h3>
            <p>
                The BS Information Systems Program includes the study of application and effect of information 
                technology to organizations. Graduates of the program should be able to implement an information 
                system, which considers complex technological and organizational factors affecting it. These 
                include components, tools. techniques, strategies, methodologies, etc.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="program-card">
            <img src="{{ asset('images/LIS.png') }}" alt="Library Information Science">
            <h3>Library Information Science</h3>
            <p>
                The BLIS Program is the study of the development, deployment, and management of information 
                resources in print, non-print, electronic and digital formats and services. Graduates of this 
                program are being prepared to apply information technology to basic library operations and 
                functions. Moreover, they are trained to harness a range of bibliographical and online tools 
                to support teaching, research, and other services.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>
    </div>
@endsection
