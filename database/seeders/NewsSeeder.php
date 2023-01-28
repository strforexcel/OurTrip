<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => 'Where Can I Go? 5 Amazing Countries That are Open Right Now',
                'description' => '“Where can I travel right now?” There’s no doubt that that’s one of the questions on your mind right now. If you’ve been itching to go on a vacation and travel the world, it’s now possible to do so! Several countries had their borders reopened for international travelers, and more will soon follow! We’ve compiled a list of counties open for travel and we’ll continue to add to it as we find more.
                Here’s what we have so far:

                1. Thailand
                Thailand is one of the most beautiful countries in Asia. There you can find majestic and colorful sacred sites, bustling markets, and scenic nature.
                In order to let the world slowly see the wonders of the country, the local government reopened the country for tourism back in July 2021 through its Sandbox Program. This system allows fully vaccinated tourists to enter the country via Blue Zone areas like Phuket and Krabi, then have them undergo quarantine for 5 days at an SHA+ hotel before moving to their parts of the country or returning home.The local government then proceeded to create two more entry programs:
                Test & Go: which allows fully-vaccinated travelers from ANY country or territory to visit Thailand with minimal quarantine days
                Alternative Quarantine (AQ): if you’re only partially vaccinated or not vaccinated at all, you can enter Thailand through this program but your quarantine period will be longer

                2. United Arab Emirates
                Some of the countries in the Middle East are opening their borders to foreigners, one of them being the United Arab Emirates. The Emirates are famous for its modern marvels like the Burj Khalifa in Dubai, cultural sites like the Sheikh Zayed Grand Mosque in Abu Dhabi, and more!
                To be able to enter the Emirates, you’ll have to meet and provide certain basic requirements:
                A visa (if applicable to you based on your citizenship/passport)
                A vaccination certificate with a valid QR code (if you’re fully vaccinated)
                A negative RT-PCR test taken no more than 48 hours from departure (if not fully vaccinated)
                A Covid-19 recovery certificate that has a QR code issued within 30 days before your departure (if you were afflicted with Covid-19)
                You must install the Alhosn app on your phone for contact tracing and to allow you to enter establishments around the country.

                3. United States of America
                The United States of America is home to several of the most famous cities in the world, cities often seen in many television shows and movies. If you’ve long been enamored by the country’s bustling metropolises and want to see world famous attractions, you can now do so because the States are now accepting international tourists!
                If youre a non-US citizen/non-immigrant, to enter the United States, you’ll need a couple of things:
                A visa (if you’re from a country that’s not part of the Visa Waiver Program)
                Proof of vaccination that indicates you were vaccinated with a US FDA and WHO-approved vaccine
                Fully vaccinated tourists don’t need to quarantine. On the other hand, unvaccinated tourists must quarantine for 7-10 days at the accommodation where they’re staying, and they must take a viral test within 3-5 days during their stay. If the traveler tests positive, the traveler must self-isolate until they make a full recovery.

                4. Hawaii
                Hawaii is one of the most popular vacation destinations in the United States because of its beautiful natural wonders (especially its beaches) as well as the laid-back atmosphere and friendly vibes of its locals.
                The state has also opened its doors to tourists! Before you go, you’ll have to adhere to a few things:
                You must have a visa (depending on your citizenship/passport)
                You must bring a vaccination certificate or card (you must have been vaccinated with a US FDA and WHO-approved vaccine)
                A negative RT-PCR test result for COVID-19 received from an accredited laboratory recognized by the Hawaiian government
                Register for Safe Travels Hawai’i if you’re coming from a transit stop from another country or state.

                5. Singapura
                As of 29 August 2022, Singapore welcomes all travelers regardless of their COVID-19 vaccination status! You just need to take note of the following:
                For fully vaccinated travelers:
                3 days before your departure, you must submit an SG Arrival Card and e-health declaration via the official and free e-service on the Immigration & Checkpoints Authority (ICA) website
                Bring proof of your vaccination
                Download the TraceTogether app and register your profile
                If youre not fully vaccinated:
                You must have travel insurance covering COVID-19, with at least $30,000 of medical coverage
                2 days before departure, you must take a COVID-19 Polymerase Chain Reaction (PCR) or professionally-administered Antigen Rapid Test (ART) and the result must be negative.',
                'author' => 'Matt Olivares',
                'timestamp' => Carbon::now(),
                'image' => '1.jpg'
            ],
        ]);
        DB::table('news')->insert([
            [
                'title' => 'Beautiful View of Indonesia Natural Hills',
                'description' => 'A land gifted with pristine beaches, exotic water villas on serene islands, vibrant tribes and their cultural ethos. No! We are not talking about a fascinating dream but about Indonesian landscapes.There are many surreal places in Indonesia, and together they offer a mix of outlandish island wonders and spine-chilling adventures. Here’s a list of the most beautiful places in Indonesia, covering islands, beaches and lakes for the water babies; national parks for wildlife lovers; active volcano sites for adventurous souls; and places for city explorers.

                What we are saying is that whether you are an adventure lover or someone who seeks peace and time alone, Indonesia is the go to place. Ranging from wild and extravagant adventures to some beautiful sights, Indonesia is perfect! Pick your favorite and get going to experience an adventure of a lifetime! Indonesia’s best islands and mountains await your wandering soul! Have a look.

                28 Most Beautiful Places In Indonesia
                If you’re visiting Indonesia anytime soon, then make sure to keep these beautiful places in Indonesia to your bucket list and enjoy the nature’s beauty which is abundant at these locations. Make sure you add these places to your itinerary while planning an exciting trip to Indonesia, one of world’s most beautiful places to visit and the most visited holiday destination. Let’s find out what makes Indonesia so special.

                Gili Islands – For The Best Nightlife
                Raja Ampat Islands – Explore Rare Species Of Corals
                Maluk Beach – Witness The Changing Colors Of Sun Rays
                Kelimutu Lake – Dramatic Volcanic Peaks
                Lake Toba – Largest Caldera
                Bunaken Marine Park – Exotic Range Of Fish Species
                Komodo National Park – For Giant Monitor Lizards
                Mount Bromo – Volcano In An Active State
                Mount Rinjani – Second Highest Volcano Of Indonesia
                Ijen – For Mining Activities
                Dieng Plateau – An Abode Of God
                Torajaland – Relish The Culture
                Borobudur Temple – World’s Biggest Buddhist Sanctuary
                Ubud – Hike Through Rainforests & Rice Paddy Fields
                Tanjung Puting National Park – Trek Through Tropical Jungles
                Derawan Islands –  To Relax & Unwind
                Belitung – For Dutch Colonial Architecture
                Nusa Dua – For White Sand Beaches
                Seminyak – Most Happening Place
                Jakarta – Melting Pot Of Cultures
                Lombok – A Stunning Marine Life
                North Sulawesi – Best Diving Sites
                Nusa Penida – Offbeat Yet Spectacular
                Bali – Cliche Yet The Best
                Yogyakarta – A Quaint Little Pretty Place
                Bandung – A Different Kind Of Calm
                Bangka Islands – Simply Blissful
                Wae Rebo Village – Iconic Culture',
                'author' => 'Raditya Dika',
                'timestamp' => Carbon::now(),
                'image' => '2.jpg'
            ],
        ]);
        DB::table('news')->insert([
            [
                'title' => '10 Indonesian Destinations You Should Visit This Year',
                'description' => 'ini deskripsinya',
                'author' => 'Ernest Prakarsa',
                'timestamp' => Carbon::now(),
                'image' => '3.jpg'
            ],
        ]);
        DB::table('news')->insert([
            [
                'title' => '5 Mountains That You Must Visit While in Indonesia',
                'description' => 'If you are familiar with the famous saying “there’s always one more mountain left to climb”, well, here in Indonesia this is not just a mere metaphor. Stretching across the archipelago, rows of mountain ranges decorate the magnificent landscapes and form some of the most fascinating natural landmarks of the world. Sitting on the “hottest spot” in the Ring of Fire, Indonesia is where you can find some of the most spectacular active volcanoes that truly offer their own thrilling sensation.

                While it provides some of the most picturesque and breathtaking panoramas for mountaineers and adventurers, this also means your chance to experience the thrilling sensation of taking on the challenging hike and climb up to some of the most beautiful summits if the world. So, here they are, some of the most amazing mountains that will definitely quench your thirst for a most thrilling adventure.

                1. Mount Merapi
                While the sheer view of the majestic Mount Merapi in Yogyakarta on the island of Java is already a splendor in itself, the thrill of conquering this most active volcano in Indonesia truly offers its own special sensation. Standing at 2,911 meters above sea level, climbing up along cooled lava streams reaching the summit of this majestic volcano you will be met by a spectacular sunrise in an amazing360 degree panoramic view.

                2. Mount Rinjani
                The mighty Mount Rinjani is a massive volcano which towers over the island of Lombok. A climb to the top is one of the most exhilarating experiences you can have in Indonesia. At 3,726 meters tall, Mount Rinjani is the second highest mountain in Indonesia. Aside from its fascinating summit, the mountain also offers the beauty of the Segara Anak Caldera Lake with its wonderfully cool clear blue water.

                3. Mount Tambora
                Just like Mount Toba in North Sumatra, Mount Tambora is also recognized as one of the world’s super-volcanoes. However, if the mega-eruption of Mount Toba – that occurred in the geological past- only left its traces in the massive Lake Toba, Mount Tambora, on the contrary, is still very much active, standing today at an imposing 2,751meters. Situated near the northern edge of the island of Sumbawa, this amazing mountain attracts seismologists, volcanologists, archeologists, biologists, and most definitely mountaineers from all over the globe who enjoy the thrill of conquering its challenging tracks.

                4. Mount Semeru
                At 3,676 m above sea level, the summit of Mount Semeru – known as Mahameru-is the highest point on Java not only in altitude but also in spiritual significance for Hindu followers on the island. The mountain is located within the Bromo Tengger Semeru National Park which covers a massive area of 800 square kilometers in the center of East Java. For mountaineers, conquering the tough challenge to reach Mahameru is definitely a milestone.

                5. Mount Gede-Pangrango National Park
                Because of its easy access near the capital city of Jakarta, the Mount Gede-Pangrango National Park with its spectacular panorama is a favorite site for both domestic and international mountain hikers. The national park offers the opportunity of climbing to not just one but two summits–Mount Gede and Mount Pangrango. The view from the Summit and crater of Mt. Gede is stunning both at sunrise and at sunset, while at the location known as Alun-alun Suryakencana, you can even find a field of enchanting Edelweiss flowers growing in the tropics.',
                'author' => 'James Lebron',
                'timestamp' => Carbon::now(),
                'image' => '4.jpg'
            ],
        ]);
        DB::table('news')->insert([
            [
                'title' => 'The Most Interesting Historical Monuments in Indonesia',
                'description' => '
                Visiting tourist sites that have high historical value can always provide different sensations and also new things that can be learned from the past. Interestingly, in Indonesia there are a lot of historical places that are not less interesting than modern tourist destinations as today, which are now increasing in number. History, of course, has its own charm that can also amaze visitors.

                So, where are the historical places in Indonesia?
                The answer is there are so many of them and spread throughout Indonesia. The following are some popular historical places in Indonesia with
                their climacteric stories as well which are worth
                to visit when you having holiday in Indonesia.

                1. Lawang Sewu, Semarang
                Lawang Sewu is a building located in Semarang City, Central Java Province. It is also being one of the icons of this city. The building is more than one hundred years old because it was built in 1904 and completed in 1907.

                The precise location of the building is on Jalan Pemuda, Semarang, right facing the Tugu Muda monument. This building were used to be the Nederlands-Indische Spoorweg Maatschappij Central Administration Office. Now, Lawang Sewu is a fairly crowded tourist attraction in the city of Semarang.

                2. Jam Gadang, Bukit Tinggi
                Next historical places in Indonesia is the Jam Gadang. As an icon of the city of Bukittinggi in West Sumatra Province, the Jam Gadang is a clock tower that was built in 1926. The base has an area of 13 x 4 meters while the height is 26 meters consisting of several levels.

                The unique thing about this tower is that this tower was built without the use of supporting iron and cement construction material. Jam Gadang was built using traditional materials such as chalk, white egg and white sand.

                3. Maimun Place, Medan
                Maimun Palace which is located in Medan, Sumatra Utara Province is a former heritage of the Sultanate of Deli and it still stands firm until now. It was built by an Italian architect named Theo Van Erp who blends the traditional, Malay, Middle Eastern and European architectural concepts.

                When you enter the Maimun Palace, you will be enchanted by the magnificent architecture inside the building which is dominated by golden yellow theme. Not only the interior design is captivating, all the furnitures in this palace also have special design that is no less luxurious.

                4. Gedung Sate, Bandung
                For those of you who have never been to Bandung, you must be curious by a building called the Gedung Sate. Not because this building sold a lot of satay food, but because of its trademark satay-shaped ornaments on the roof.

                Actually, on the roof of the Gedung Sate there are six pieces water apple-shaped ornament which most people interpret these ornaments as a sign of fertility from the Bandung City.

                5. Taman Sari, Jogja
                The Taman Sari Palace which is located in Yogyakarta, Central Java Province was built during the reign of the King Sultan Hamengku Buwono I in the 17th century. It is said that the total workmanship of Taman Sari took 9 years, starting from 1758 to 1765. The palace area reaches 10 hectares with many unique buildings such as bathing ponds, suspension bridges and water canals.

                Historically, Taman Sari was built by a Portuguese architect who has the nickname Demang Tegis. Despite having been struck by an attack from England in 1812 and also an earthquake in 1876, Taman Sari still stands beautifully until today.',
                'author' => 'Mursid',
                'timestamp' => Carbon::now(),
                'image' => '5.jpg'
            ],
        ]);
    }
}
