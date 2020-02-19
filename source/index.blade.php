@extends('_layouts.master')

@section('content')

<body class="antialiased font-sans bg-gray-200">

    <div class="app font-sans min-w-screen min-h-screen bg-grey-lighter py-8 px-4">

        <div class="max-w-md mx-auto">

            <div class="bg-white p-8 shadow">

                <div class="h-64 flex flex-col items-center justify-center text-center tracking-wide leading-normal bg-gray-900 -mx-8 -mt-8 p-4">
                    <h1 class="text-white text-4xl font-semibold">Main title</h1>
                    <p class="text-white text-xl">.. some more text.</p>
                </div>

                <div class="py-8 border-b">
                    <p ref="greeting">Hey David!</p>
                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel cumque tempora eveniet aperiam saepe deserunt.</p>
                    <button class="text-white text-sm tracking-wide bg-blue-500 hover:bg-blue-600 hover:shadow rounded w-full my-8 p-4 uppercase">Visit the portal</button>

                    <table class="table-auto w-full text-left mb-8">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-blue-100 px-4 py-2">7th of March, 2001</td>
                                <td class="border border-blue-100 px-4 py-2">$19</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border border-blue-100 px-4 py-2">10th of June, 2009</td>
                                <td class="border border-blue-100 px-4 py-2">$49</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="text-sm">
                        Best of luck!
                        <br>
                        Invoice Ninja
                    </p>
                </div>

                <div class="mt-8 text-center">
                    <h3 class="text-base sm:text-lg">More text goes here..</h3>
                    <a href="https://invoiceninja.com" class="text-blue-500 hover:text-blue-600">https://invoiceninja.com</a>
                </div>

            </div>

            <div class="text-center text-sm mt-8">

                <div class="meta__help">
                    <p class="leading-loose">
                        Hate these? <a href="#" class="text-gray-700 underline">Unsubscribe</a>
                    </p>
                </div>

            </div>


        </div>

    </div>

</body>
@endsection