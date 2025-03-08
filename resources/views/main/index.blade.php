<x-shop-layout>
    <div class="section">
        <div class="container book-container">
            <img class="max-w-md mx-auto" src="/book-cover.jpg" />

            <h1 class="text-4xl font-bold text-center mt-5 mb-3">
                LALAJS. Summer days with your laptop on deserted island
            </h1>

            <p>
                The story about learning JavaScript.
                The main character is stranded on a deserted island for the entire summer, waiting three months for the
                next ship home. With no internet but a laptop in hand, he embarks on a journey of discovery, using his
                laptop to tackle intriguing and important challenges.
            </p>

            <h2 class="text-3xl font-bold text-center mt-5 mb-3">
                Section 1. The Island’s Gifts
            </h2>

            <p>
                Let’s imagine your computer can run only one program - the internet browser.
                You press the button or open the laptop, screen flashing and you see the only one program - internet
                browser.
            </p>

            <p>
                But it’s not the end of the story. You look at the window and realise, you are on the small beautiful
                deserted island, without internet. And you know that the ship from main land goes 1 time in a 3 months.
                You were the part of the spring expedition, today the Jun 1, the ship sailed away without you in the
                morning and the next ship will arrive Sep 1. So, you have the laptop, the summer, the island with exotic
                fruits and the electricity from sun batteries.
            </p>

            <p>
                If I meet this situation, the first thing I’ll do, is going outside and looking for oranges or bananas
                to eat, after that I’ll go to beach to feel the refreshing summer breeze and to swim in clear water. I
                guess, you would have done the same) So, don’t wait, until sunset, go outside and enjoy your day.
            </p>

            <p>
                When you come back, I’ll show you, how to create function for showing how many days last until ship
                arriving, so you can run this code every morning and see the number of days when you can leave this
                island, instead of scratching crosses on the wall.
            </p>

            <p>
                The evening.
            </p>
            <p>
                Open the browser. (turn off the wi-fi, reader, for complete immersion). Probably, you’ll see this:
            </p>
            <img src="/book/image-1.png" alt="">

            <p>
                How you can use this? How you can calculate the days until ship arrive with this unpromising screen?
            </p>

            <p>
                The answer is: browser console. You should run the code in browser console:
            </p>

            <h3 class="text-xl font-bold text-center mt-1 mb-1">
                Lets do it step by step:
            </h3>

            <p>
                1. Open context menu by clicking the right button on your mouse and choose “Inspect”:
            </p>
            <img src="/book/image-2.png" alt="">

            <p>
                2. Then click on “Console” tab:
            </p>
            <img src="/book/image-3.png" alt="">

            <p>
                3. Past this Javascript code into the console and press “Enter”:
            </p>
<pre><code class="language-javascript">const today = new Date();
const targetDate = new Date(2025, 8, 1); // 2025 - year, 8 - month index, 1 - the day of the month

const timeDifference = targetDate - today;
console.log(timeDifference);</code></pre>

            <p>
                You’ll see the long number as a result, something like on the image below:
            </p>
            <img src="/book/image-4.png" alt="">

            <p>
                It’s not the number of days. It’s the number of milliseconds between today and the target day. So you should convert milliseconds to days. The day have 24 hours. 1 hour have 60 minutes. 1 minute have 60 seconds. 1 second have 1000 milliseconds. So one hour have 60 * 60 * 1000 milliseconds. 24 hours have 24 * 60 * 60 * 1000 milliseconds. 
            </p>

            <p>
                To calculate the days, divide the timeDifference by 24 * 60 * 60 * 1000.
For example 15394388047 / (24 * 60 * 60 * 1000).
            </p>

            pYou should change this line:<br>
            console.log(timeDifference);<br>
            Into this variant:<br>
            console.log(timeDifference / (24 * 60 * 60 * 1000));

            <p>
                4. So, run this updated code in browser console:
            </p>
            <pre><code class="language-javascript">const today = new Date();
const targetDate = new Date(2025, 8, 1); // 2025 - year, 8 - month index, 1 - the day of the month

const timeDifference = targetDate - today;
console.log(timeDifference / (24 * 60 * 60 * 1000));</code></pre>

<p>
    You should see the days until the sheep arrive:
</p>
<img src="/book/image-5.png" alt="">

<p>
    For better immersion in this unique and amazing journey, you can make the code to return 93 days today until the ship arrives. Let’s remember that the hero of this book started the countdown on June 1st, and 93 days are left until the arrival of the ship at the end of summer.
</p>

<p>
    For that you should calculate what date will be after 93 days after the day when you are reading this section. Run this code in console to calculate:
</p>

<pre><code class="language-javascript">const today = new Date();
const futureDate = new Date(today.getTime() + 93 * 24 * 60 * 60 * 1000);
console.log(futureDate);</code></pre>

<p>
    You’ll see something like this: <br>
Sat Jun 07 2025 21:00:03 GMT+0300 (Eastern European Summer Time)
</p>
<img src="/book/image-6.png" alt="">

<p>Now you can change this line of code:</p>
    <p>const targetDate = new Date(2025, 8, 1); // 2025 - year, 8 - month index, 1 - the day of the month</p>
    <p>into this:</p>
<p>const targetDate = new Date(2025, 5, 7); // 2025 - year, 5 - month index, 7 - the day of the month</p>

<p>
    The real index for June is 6, but in Javascript the months indexes starts with 0, not with 1. So you should minus 1 from 6. So the 5 will be the month index you should paste in the code.
</p>

<p>The full variant of updated code will be:</p>

<pre><code class="language-javascript">const today = new Date();
/*
IMPORTANT: Replace the values in the next line with the target date
you obtained using the futureDate calculation.
*/
const targetDate = new Date(2025, 5, 7); // 2025 - year, 5 - month index, 7 - the day of the month

const timeDifference = targetDate - today;
console.log(timeDifference / (24 * 60 * 60 * 1000));</code></pre>

<p>
    After running the code above in the browser console you should get 92 days. (After dot can be other numbers, like 92.12058381944445).
</p>

<p>
    Run this code every day to see how many days are left until the ship arrives to continue your journey on the mainland—the journey of learning JavaScript. Right now, with around 92 days left, you can learn JS with us on this beautiful island!
</p>

<h2 class="text-3xl font-bold text-center mt-5 mb-3">
    Section 2. Wonderful find
</h2>

<p>
    ...Coming soon
</p>

        </div>
    </div>
</x-shop-layout>
