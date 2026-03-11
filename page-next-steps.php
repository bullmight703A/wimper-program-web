<?php
/**
 * Template Name: Post-Booking Expecations (Next Steps)
 * Description: The required expectation-setting page triggered immediately after a successful GoHighLevel calendar booking.
 */

// Force body class for tailored styling if needed
add_filter('body_class', function($classes) {
    if (!in_array('wimper-booking-flow', $classes)) {
        $classes[] = 'wimper-booking-flow';
    }
    return $classes;
});

get_header(); ?>

<!-- PATTERN INTERRUPT HEADER -->
<div class="bg-red-600 w-full py-6 md:py-8 mb-0 border-b-4 border-slate-900 shadow-2xl relative z-10">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h1 class="text-3xl md:text-5xl font-black text-white leading-tight uppercase tracking-tight drop-shadow-md underline decoration-slate-900 decoration-4 underline-offset-8">
            STOP: Your Consultation is NOT Confirmed.
        </h1>
        <p class="text-white mt-4 font-bold text-lg md:text-xl drop-shadow-sm">
            Please Review the Critical Requirements Below to Secure Your Allocation Call.
        </p>
    </div>
</div>

<!-- STEP 1: RE-ANCHOR VIDEO CONTAINER -->
<section class="bg-slate-900 py-16 md:py-24 border-b-4 border-gold relative overflow-hidden">
    <!-- Abstract Tech Background pattern from theme -->
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.2) 1px, transparent 0); background-size: 32px 32px;"></div>
    
    <div class="max-w-4xl mx-auto px-6 relative z-10">
        <div class="text-center mb-10">
            <span class="inline-block bg-slate-800 text-gold px-4 py-1.5 rounded-full text-sm font-bold uppercase tracking-widest mb-4 border border-gold/30">Step 1: Required Viewing</span>
            <h2 class="text-3xl md:text-4xl font-serif text-white">Why You Booked This Call</h2>
        </div>

        <!-- HeyGen Avatar 2 Video Placeholder -->
        <div class="aspect-video bg-black rounded-xl shadow-2xl border-2 border-slate-700 flex items-center justify-center relative group overflow-hidden">
            <div class="absolute inset-0 bg-slate-800/80 flex items-center justify-center z-20">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gold mx-auto mb-4 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-slate-300 font-mono text-sm uppercase tracking-widest">[ HeyGen Avatar 2 VSL Pending ]</p>
                </div>
            </div>
            <!-- Placholder image of corporate boardroom/tax environment -->
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Executive Strategy" class="w-full h-full object-cover opacity-40 mix-blend-overlay">
        </div>
    </div>
</section>

<!-- MAIN CONTENT BLOCK: STEPS 2-5 -->
<section class="bg-slate-50 py-16 font-sans">
    <div class="max-w-4xl mx-auto px-6">
        
        <div class="glass-panel p-8 md:p-12 rounded-[1.5rem] shadow-xl border border-slate-200 -mt-24 relative z-20 bg-white">
            
            <!-- STEP 2: LOGISTICS -->
            <div class="mb-12 border-l-4 border-gold pl-6">
                <span class="text-gold font-bold uppercase tracking-widest text-xs mb-2 block">Step 2: Logistics</span>
                <h3 class="text-2xl font-black text-navy mb-4">Secure the Calendar Integration</h3>
                <p class="text-slate-700 leading-relaxed mb-4">
                    Check your email inbox <strong>right now</strong>. You have received a calendar invitation for your scheduled consultation block. 
                </p>
                <div class="bg-amber-50 rounded-lg p-5 border border-amber-200">
                    <p class="text-amber-900 font-bold flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        <span>You must physically click "Yes" and Add this to your Google/Outlook calendar. If this appointment is not accepted on your end, our system will automatically cancel the consultation to protect our analysts' time.</span>
                    </p>
                </div>
            </div>

            <hr class="border-slate-100 my-10">

            <!-- STEP 3: ADVISOR WARNING -->
            <div class="mb-12">
                <span class="text-gold font-bold uppercase tracking-widest text-xs mb-2 block">Step 3: Protocol</span>
                <h3 class="text-2xl font-black text-navy mb-4">Expect a Confirmation Call</h3>
                <p class="text-slate-700 leading-relaxed">
                    Prior to your scheduled block, one of our Senior Qualification Advisors will be calling the number you provided to confirm your firm's fundamental eligibility (50+ employees, W-2 payroll scale). 
                </p>
                <p class="text-slate-700 leading-relaxed mt-4 font-bold">
                    If we cannot reach you to confirm these baseline metrics, your allocation call will be canceled. Please ensure your phone is accessible.
                </p>
            </div>

            <hr class="border-slate-100 my-10">

            <!-- STEP 4 & 5: IDENTITY & FAQ -->
            <div>
                <span class="text-gold font-bold uppercase tracking-widest text-xs mb-2 block">Step 4: Preparation</span>
                <h3 class="text-2xl font-black text-navy mb-6">Frequently Asked Questions</h3>
                
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-6">
                        <h4 class="font-bold text-slate-900 text-lg mb-2">"Doesn't my CPA already handle this?"</h4>
                        <p class="text-slate-600">Standard CPAs are historians—they look backward to file compliance taxes. WIMPER operates as Specialized Tax Engineers. We deploy proprietary compliance algorithms strictly dedicated to recovering massive federal credits (ERTC, R&D, WOTC) that traditional accounting firms miss regarding 50+ employee rosters.</p>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-6">
                        <h4 class="font-bold text-slate-900 text-lg mb-2">"Is this going to drain my HR department's time?"</h4>
                        <p class="text-slate-600">No. Our enterprise framework is designed for executives. Once basic payroll documentation is securely transmitted, our engineering team handles 95% of the heavy lifting. Your firm continues operations while we audit and unearth the capital.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SOCIAL PROOF / TESTIMONIAL CAROUSEL PLACEHOLDER -->
<section class="bg-white py-20 border-t border-slate-100">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-serif text-navy">The WIMPER Standard</h2>
            <p class="text-slate-500 mt-2">Hear directly from enterprises who scaled their capital through our frameworks.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Proof Card 1 -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 shadow-sm relative">
                <div class="text-gold mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-slate-700 italic mb-6">"Our traditional CPA missed over $400k in available R&D and employee retention credits. WIMPER's engineering team unearthed the capital in 14 days without disrupting our HR operations."</p>
                <div class="font-bold text-navy uppercase text-xs tracking-widest">— Logistics Firm, 120 Employees</div>
            </div>
            
            <!-- Proof Card 2 -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 shadow-sm relative">
                <div class="text-gold mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-slate-700 italic mb-6">"The feasibility consultation alone changed our entire outlook on corporate tax strategy. We implemented their framework and recovered six figures within the quarter."</p>
                <div class="font-bold text-navy uppercase text-xs tracking-widest">— Manufacturing CEO, 85 Employees</div>
            </div>

            <!-- Proof Card 3 -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 shadow-sm relative">
                <div class="text-gold mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-slate-700 italic mb-6">"We assumed our massive payroll was optimized. We were wrong. WIMPER found compliance gaps that immediately converted to a $250k liquidity event for our scaling business."</p>
                <div class="font-bold text-navy uppercase text-xs tracking-widest">— Tech Startup, 150 Employees</div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
