@extends('layout.layout')

@section('main')
    <section id="hero" class="hero section">

        <div class="background-elements">
            <div class="bg-circle circle-1"></div>
            <div class="bg-circle circle-2"></div>
        </div>

        <div class="hero-content">
            <div class="container">
                <a href="{{ route('home') }}"><button class="btn btn-primary">back</button></a>
                <div class="row align-items-center">
                    
                    <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">
                        <div class="hero-text">
                            <h2>Your Sales Engine Runs While You Rest </h2>
                            <p>Because great copy never takes a day off </p>

                            <p class="description">Exhausted from putting your heart (and wallet) into marketing… only to
                                watch sales crawl in at a snail’s pace.
                                Exhausted from refreshing your stats, hoping this campaign is “the one”… and feeling that
                                familiar sting of disappointment.
                                Exhausted from quietly wondering if maybe you’re just not cut out for selling.
                                Your ads? They eat up your budget but never seem to return the favor.
                                Your website? Visitors pop in, look around, and vanish without a trace.
                                Your emails? Sitting in inboxes, barely opened, rarely clicked.
                                And here’s the part that really stings — you know your offer can change lives.
                                But the right people aren’t hearing it.
                                Not in the way that makes them stop, lean in, and think: I need this.
                                Here’s the truth nobody likes to admit:
                                The best products often lose to average ones — just because the other guy has better copy.


                                People don’t buy because you exist — they buy because you made them feel something.


                                Without the right words, your dream customers will keep saying “yes” to someone else.


                                And honestly? That’s not fair — not to you, not to your business, and not to the people
                                you’re trying to help.
                                You don’t need to change your offer.
                                You just need the words that make people want it.
                                You don’t need more noise. You need words that work — words that connect, convince, and
                                close.
                                That’s where I come in.
                                Think of me as your business’s secret sales weapon — the one who turns “just looking” into
                                “shut up and take my money.”
                                No more staring at a blinking cursor, wondering what to write.
                                No more guessing if your copy will work.
                                No more losing sleep over whether people get what you do.
                                I’ll take your ideas, your story, and your offer…
                                and turn them into copy that works for you 24/7 — so you can finally breathe, focus, and
                                yes, sleep.
                                Here’s what I can take off your plate:
                                💬 Social Media That Sells
                                Not just posts. Mini-marketing machines.
                                Scroll-stopping ads that grab attention now


                                Captions that start conversations — and conversions


                                Video & reel scripts designed to hook in under 3 seconds


                                💻 Website Copy That Works
                                Because a “pretty” site isn’t enough — it needs to convert.
                                Homepages that instantly make visitors feel, “This is it”


                                About pages that turn strangers into fans


                                Sales pages that close deals while you sleep


                                Landing pages laser-focused on lead capture


                                🛒 Sales & Marketing Materials
                                Every word, working toward the sale.
                                Sales letters that persuade without pushiness


                                Lead magnets that they actually want to download


                                Product descriptions so vivid they can “see” it in their hands


                                Brochures that aren’t just pretty — they’re persuasive


                                📧 Emails That Get Opens (and Clicks)
                                Your inbox just became a revenue stream.
                                Welcome sequences that turn new leads into loyal fans


                                Nurture campaigns that keep your brand top-of-mind


                                Promotional blasts that actually get clicked


                                Any email you can dream up — I’ll make it sell


                                🎥 Video & VSL Scripts
                                Sell with story and keep them watching till the end.
                                Persuasive scripts for high-converting sales videos


                                Story-driven brand videos that stick in memory



                                If it involves words and selling, I can write it.
                                Because the right copy doesn’t just fill a page — it fills your bank account.


                            </p>



                            <div class="social-links">
                                <a href="#"><i class="bi bi-dribbble"></i></a>
                                <a href="#"><i class="bi bi-behance"></i></a>
                                <a href="#"><i class="bi bi-github"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
@endsection




<style>
    .hero-text {
         display: flex;
         justify-content: center;
         flex-direction: column;
         align-items: center;
     }

       .hero-text .description{   
        width: 100% !important;
        max-width: none !important;
       }
</style>
