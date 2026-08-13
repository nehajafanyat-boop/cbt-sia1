<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Database\Seeder;

class EnglishQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('name', 'Bahasa Inggris')->first();

        if (!$subject) {
            $subject = Subject::create([
                'name' => 'Bahasa Inggris',
            ]);
        }

        $questions = [

            [
                'question' => 'What is the English word for "buku"?',
                'options' => [
                    'A' => 'Book',
                    'B' => 'Pen',
                    'C' => 'Bag',
                    'D' => 'Table',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "big"?',
                'options' => [
                    'A' => 'Tall',
                    'B' => 'Small',
                    'C' => 'Long',
                    'D' => 'Wide',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'She ___ a student.',
                'options' => [
                    'A' => 'am',
                    'B' => 'are',
                    'C' => 'is',
                    'D' => 'be',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the plural form of "child"?',
                'options' => [
                    'A' => 'Childs',
                    'B' => 'Children',
                    'C' => 'Childes',
                    'D' => 'Childrens',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What day comes after Monday?',
                'options' => [
                    'A' => 'Sunday',
                    'B' => 'Wednesday',
                    'C' => 'Tuesday',
                    'D' => 'Friday',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "merah"?',
                'options' => [
                    'A' => 'Blue',
                    'B' => 'Green',
                    'C' => 'Yellow',
                    'D' => 'Red',
                ],
                'answer' => 'D',
            ],

            [
                'question' => 'I ___ a student.',
                'options' => [
                    'A' => 'am',
                    'B' => 'is',
                    'C' => 'are',
                    'D' => 'be',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'Which one is an animal?',
                'options' => [
                    'A' => 'Chair',
                    'B' => 'Cat',
                    'C' => 'Book',
                    'D' => 'Pencil',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "hot"?',
                'options' => [
                    'A' => 'Warm',
                    'B' => 'Cold',
                    'C' => 'Dry',
                    'D' => 'Bright',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'They ___ playing football.',
                'options' => [
                    'A' => 'is',
                    'B' => 'am',
                    'C' => 'are',
                    'D' => 'be',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "sekolah"?',
                'options' => [
                    'A' => 'Hospital',
                    'B' => 'School',
                    'C' => 'Market',
                    'D' => 'Library',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'My mother is a teacher. She works at a ___.',
                'options' => [
                    'A' => 'School',
                    'B' => 'Farm',
                    'C' => 'Bank',
                    'D' => 'Restaurant',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "happy"?',
                'options' => [
                    'A' => 'Glad',
                    'B' => 'Nice',
                    'C' => 'Sad',
                    'D' => 'Good',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'There ___ three books on the table.',
                'options' => [
                    'A' => 'is',
                    'B' => 'am',
                    'C' => 'are',
                    'D' => 'be',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "apel"?',
                'options' => [
                    'A' => 'Orange',
                    'B' => 'Apple',
                    'C' => 'Banana',
                    'D' => 'Mango',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a color?',
                'options' => [
                    'A' => 'Green',
                    'B' => 'Chair',
                    'C' => 'Teacher',
                    'D' => 'House',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'He ___ a new bicycle.',
                'options' => [
                    'A' => 'have',
                    'B' => 'has',
                    'C' => 'having',
                    'D' => 'had',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What time of day comes after afternoon?',
                'options' => [
                    'A' => 'Morning',
                    'B' => 'Night',
                    'C' => 'Evening',
                    'D' => 'Noon',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "kucing"?',
                'options' => [
                    'A' => 'Dog',
                    'B' => 'Bird',
                    'C' => 'Fish',
                    'D' => 'Cat',
                ],
                'answer' => 'D',
            ],

            [
                'question' => 'We ___ English every Monday.',
                'options' => [
                    'A' => 'study',
                    'B' => 'studies',
                    'C' => 'studying',
                    'D' => 'studied',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the English word for "rumah"?',
                'options' => [
                    'A' => 'House',
                    'B' => 'Garden',
                    'C' => 'Room',
                    'D' => 'Kitchen',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "fast"?',
                'options' => [
                    'A' => 'Quick',
                    'B' => 'Slow',
                    'C' => 'Early',
                    'D' => 'Strong',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'She ___ two brothers.',
                'options' => [
                    'A' => 'have',
                    'B' => 'has',
                    'C' => 'having',
                    'D' => 'had',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "air"?',
                'options' => [
                    'A' => 'Fire',
                    'B' => 'Wind',
                    'C' => 'Water',
                    'D' => 'Air',
                ],
                'answer' => 'D',
            ],

            [
                'question' => 'Which one is a fruit?',
                'options' => [
                    'A' => 'Carrot',
                    'B' => 'Potato',
                    'C' => 'Banana',
                    'D' => 'Spinach',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'The sun rises in the ___.',
                'options' => [
                    'A' => 'West',
                    'B' => 'North',
                    'C' => 'South',
                    'D' => 'East',
                ],
                'answer' => 'D',
            ],

            [
                'question' => 'What is the plural form of "book"?',
                'options' => [
                    'A' => 'Bookes',
                    'B' => 'Books',
                    'C' => 'Bookies',
                    'D' => 'Book',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'My father ___ a car.',
                'options' => [
                    'A' => 'have',
                    'B' => 'has',
                    'C' => 'having',
                    'D' => 'are',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "clean"?',
                'options' => [
                    'A' => 'Dirty',
                    'B' => 'Fresh',
                    'C' => 'Beautiful',
                    'D' => 'Neat',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'We use our eyes to ___.',
                'options' => [
                    'A' => 'hear',
                    'B' => 'walk',
                    'C' => 'see',
                    'D' => 'eat',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "meja"?',
                'options' => [
                    'A' => 'Chair',
                    'B' => 'Table',
                    'C' => 'Door',
                    'D' => 'Window',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "old"?',
                'options' => [
                    'A' => 'Young',
                    'B' => 'Big',
                    'C' => 'Small',
                    'D' => 'Long',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'They ___ students.',
                'options' => [
                    'A' => 'is',
                    'B' => 'am',
                    'C' => 'are',
                    'D' => 'be',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "anjing"?',
                'options' => [
                    'A' => 'Cat',
                    'B' => 'Dog',
                    'C' => 'Bird',
                    'D' => 'Rabbit',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a school subject?',
                'options' => [
                    'A' => 'Mathematics',
                    'B' => 'Kitchen',
                    'C' => 'Garden',
                    'D' => 'Bedroom',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'She ___ breakfast every morning.',
                'options' => [
                    'A' => 'eat',
                    'B' => 'eating',
                    'C' => 'eats',
                    'D' => 'ate',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "ibu"?',
                'options' => [
                    'A' => 'Father',
                    'B' => 'Brother',
                    'C' => 'Mother',
                    'D' => 'Sister',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the opposite of "dark"?',
                'options' => [
                    'A' => 'Black',
                    'B' => 'Bright',
                    'C' => 'Cold',
                    'D' => 'Small',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'I have ten fingers on my ___.',
                'options' => [
                    'A' => 'Head',
                    'B' => 'Hand',
                    'C' => 'Foot',
                    'D' => 'Eye',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What do we use to write?',
                'options' => [
                    'A' => 'Pencil',
                    'B' => 'Shoes',
                    'C' => 'Plate',
                    'D' => 'Glass',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the English word for "kakak laki-laki"?',
                'options' => [
                    'A' => 'Brother',
                    'B' => 'Sister',
                    'C' => 'Father',
                    'D' => 'Uncle',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "short"?',
                'options' => [
                    'A' => 'Small',
                    'B' => 'Long',
                    'C' => 'Thin',
                    'D' => 'Low',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'He ___ to school every day.',
                'options' => [
                    'A' => 'go',
                    'B' => 'going',
                    'C' => 'goes',
                    'D' => 'gone',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "bunga"?',
                'options' => [
                    'A' => 'Tree',
                    'B' => 'Flower',
                    'C' => 'Leaf',
                    'D' => 'Grass',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a vegetable?',
                'options' => [
                    'A' => 'Apple',
                    'B' => 'Mango',
                    'C' => 'Carrot',
                    'D' => 'Banana',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'The sky is usually ___.',
                'options' => [
                    'A' => 'Blue',
                    'B' => 'Green',
                    'C' => 'Black',
                    'D' => 'Brown',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the English word for "ayah"?',
                'options' => [
                    'A' => 'Mother',
                    'B' => 'Brother',
                    'C' => 'Father',
                    'D' => 'Grandmother',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'She is ___ a book now.',
                'options' => [
                    'A' => 'read',
                    'B' => 'reads',
                    'C' => 'reading',
                    'D' => 'reader',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the opposite of "easy"?',
                'options' => [
                    'A' => 'Simple',
                    'B' => 'Difficult',
                    'C' => 'Good',
                    'D' => 'Fast',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which animal can fly?',
                'options' => [
                    'A' => 'Fish',
                    'B' => 'Dog',
                    'C' => 'Bird',
                    'D' => 'Cat',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "sekolah"?',
                'options' => [
                    'A' => 'School',
                    'B' => 'Office',
                    'C' => 'House',
                    'D' => 'Shop',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'We ___ happy today.',
                'options' => [
                    'A' => 'is',
                    'B' => 'am',
                    'C' => 'are',
                    'D' => 'be',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the opposite of "near"?',
                'options' => [
                    'A' => 'Close',
                    'B' => 'Far',
                    'C' => 'Next',
                    'D' => 'Around',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What do we use to hear?',
                'options' => [
                    'A' => 'Eyes',
                    'B' => 'Nose',
                    'C' => 'Ears',
                    'D' => 'Mouth',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'My sister ___ a beautiful dress.',
                'options' => [
                    'A' => 'have',
                    'B' => 'has',
                    'C' => 'having',
                    'D' => 'are',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "matahari"?',
                'options' => [
                    'A' => 'Moon',
                    'B' => 'Star',
                    'C' => 'Cloud',
                    'D' => 'Sun',
                ],
                'answer' => 'D',
            ],

            [
                'question' => 'Which one is used for drinking?',
                'options' => [
                    'A' => 'Glass',
                    'B' => 'Pencil',
                    'C' => 'Book',
                    'D' => 'Shoes',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'I ___ breakfast at seven o’clock.',
                'options' => [
                    'A' => 'has',
                    'B' => 'have',
                    'C' => 'having',
                    'D' => 'had',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "full"?',
                'options' => [
                    'A' => 'Empty',
                    'B' => 'Large',
                    'C' => 'Heavy',
                    'D' => 'Big',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'Which one is a place to buy food?',
                'options' => [
                    'A' => 'Market',
                    'B' => 'School',
                    'C' => 'Hospital',
                    'D' => 'Library',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the English word for "kaki"?',
                'options' => [
                    'A' => 'Hand',
                    'B' => 'Foot',
                    'C' => 'Head',
                    'D' => 'Arm',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "beautiful"?',
                'options' => [
                    'A' => 'Pretty',
                    'B' => 'Ugly',
                    'C' => 'Nice',
                    'D' => 'Clean',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'They ___ football every Sunday.',
                'options' => [
                    'A' => 'plays',
                    'B' => 'play',
                    'C' => 'playing',
                    'D' => 'played',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "bulan"?',
                'options' => [
                    'A' => 'Moon',
                    'B' => 'Sun',
                    'C' => 'Star',
                    'D' => 'Cloud',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'Which one is a drink?',
                'options' => [
                    'A' => 'Rice',
                    'B' => 'Bread',
                    'C' => 'Milk',
                    'D' => 'Egg',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'The grass is usually ___.',
                'options' => [
                    'A' => 'Blue',
                    'B' => 'Green',
                    'C' => 'Red',
                    'D' => 'Black',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "adik perempuan"?',
                'options' => [
                    'A' => 'Brother',
                    'B' => 'Sister',
                    'C' => 'Mother',
                    'D' => 'Aunt',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'He is ___ a bicycle now.',
                'options' => [
                    'A' => 'ride',
                    'B' => 'rides',
                    'C' => 'riding',
                    'D' => 'rode',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the opposite of "strong"?',
                'options' => [
                    'A' => 'Weak',
                    'B' => 'Tall',
                    'C' => 'Fast',
                    'D' => 'Heavy',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'Which animal lives in water?',
                'options' => [
                    'A' => 'Horse',
                    'B' => 'Fish',
                    'C' => 'Cat',
                    'D' => 'Chicken',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "pagi"?',
                'options' => [
                    'A' => 'Night',
                    'B' => 'Evening',
                    'C' => 'Morning',
                    'D' => 'Afternoon',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'She ___ English very well.',
                'options' => [
                    'A' => 'speak',
                    'B' => 'speaks',
                    'C' => 'speaking',
                    'D' => 'spoke',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "expensive"?',
                'options' => [
                    'A' => 'Cheap',
                    'B' => 'Rich',
                    'C' => 'Large',
                    'D' => 'Heavy',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What do we use to smell?',
                'options' => [
                    'A' => 'Eyes',
                    'B' => 'Ears',
                    'C' => 'Nose',
                    'D' => 'Hands',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'My brother ___ a motorcycle.',
                'options' => [
                    'A' => 'have',
                    'B' => 'has',
                    'C' => 'having',
                    'D' => 'are',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "hujan"?',
                'options' => [
                    'A' => 'Rain',
                    'B' => 'Wind',
                    'C' => 'Snow',
                    'D' => 'Cloud',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'Which one is a means of transportation?',
                'options' => [
                    'A' => 'Table',
                    'B' => 'Car',
                    'C' => 'Chair',
                    'D' => 'Book',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'We ___ lunch at twelve o’clock.',
                'options' => [
                    'A' => 'has',
                    'B' => 'have',
                    'C' => 'having',
                    'D' => 'had',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "open"?',
                'options' => [
                    'A' => 'Wide',
                    'B' => 'Close',
                    'C' => 'Closed',
                    'D' => 'Free',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'Which place do we go to see a doctor?',
                'options' => [
                    'A' => 'School',
                    'B' => 'Market',
                    'C' => 'Hospital',
                    'D' => 'Library',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "rumah sakit"?',
                'options' => [
                    'A' => 'School',
                    'B' => 'Hospital',
                    'C' => 'Market',
                    'D' => 'Library',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "tall"?',
                'options' => [
                    'A' => 'Short',
                    'B' => 'Long',
                    'C' => 'Big',
                    'D' => 'Wide',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'He ___ his teeth every morning.',
                'options' => [
                    'A' => 'brush',
                    'B' => 'brushes',
                    'C' => 'brushing',
                    'D' => 'brushed',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "laut"?',
                'options' => [
                    'A' => 'River',
                    'B' => 'Lake',
                    'C' => 'Sea',
                    'D' => 'Mountain',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'Which one is a wild animal?',
                'options' => [
                    'A' => 'Lion',
                    'B' => 'Chicken',
                    'C' => 'Cow',
                    'D' => 'Goat',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'The opposite of "day" is ___.',
                'options' => [
                    'A' => 'Morning',
                    'B' => 'Afternoon',
                    'C' => 'Night',
                    'D' => 'Noon',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "guru"?',
                'options' => [
                    'A' => 'Student',
                    'B' => 'Teacher',
                    'C' => 'Doctor',
                    'D' => 'Driver',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'They ___ watching television now.',
                'options' => [
                    'A' => 'is',
                    'B' => 'am',
                    'C' => 'are',
                    'D' => 'be',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the opposite of "wet"?',
                'options' => [
                    'A' => 'Cold',
                    'B' => 'Dry',
                    'C' => 'Clean',
                    'D' => 'Soft',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a part of the body?',
                'options' => [
                    'A' => 'Table',
                    'B' => 'Window',
                    'C' => 'Nose',
                    'D' => 'Chair',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "pintu"?',
                'options' => [
                    'A' => 'Door',
                    'B' => 'Floor',
                    'C' => 'Wall',
                    'D' => 'Roof',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'My mother ___ dinner every evening.',
                'options' => [
                    'A' => 'cook',
                    'B' => 'cooks',
                    'C' => 'cooking',
                    'D' => 'cooked',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "light"?',
                'options' => [
                    'A' => 'Bright',
                    'B' => 'Heavy',
                    'C' => 'Small',
                    'D' => 'Thin',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is used for cutting paper?',
                'options' => [
                    'A' => 'Ruler',
                    'B' => 'Scissors',
                    'C' => 'Pencil',
                    'D' => 'Eraser',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "sungai"?',
                'options' => [
                    'A' => 'River',
                    'B' => 'Sea',
                    'C' => 'Ocean',
                    'D' => 'Island',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'I ___ my homework every afternoon.',
                'options' => [
                    'A' => 'do',
                    'B' => 'does',
                    'C' => 'doing',
                    'D' => 'did',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "young"?',
                'options' => [
                    'A' => 'Small',
                    'B' => 'Old',
                    'C' => 'Short',
                    'D' => 'Weak',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a place for reading books?',
                'options' => [
                    'A' => 'Library',
                    'B' => 'Hospital',
                    'C' => 'Market',
                    'D' => 'Airport',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'She ___ a letter to her friend.',
                'options' => [
                    'A' => 'write',
                    'B' => 'writes',
                    'C' => 'writing',
                    'D' => 'wrote',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "gunung"?',
                'options' => [
                    'A' => 'Hill',
                    'B' => 'Mountain',
                    'C' => 'Valley',
                    'D' => 'Forest',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "jendela"?',
                'options' => [
                    'A' => 'Door',
                    'B' => 'Window',
                    'C' => 'Wall',
                    'D' => 'Roof',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "clean"?',
                'options' => [
                    'A' => 'Dirty',
                    'B' => 'Fresh',
                    'C' => 'Neat',
                    'D' => 'Clear',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'She ___ to school by bus every morning.',
                'options' => [
                    'A' => 'go',
                    'B' => 'goes',
                    'C' => 'going',
                    'D' => 'gone',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "ikan"?',
                'options' => [
                    'A' => 'Bird',
                    'B' => 'Fish',
                    'C' => 'Horse',
                    'D' => 'Rabbit',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a fruit?',
                'options' => [
                    'A' => 'Cabbage',
                    'B' => 'Carrot',
                    'C' => 'Orange',
                    'D' => 'Potato',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'We ___ in Indonesia.',
                'options' => [
                    'A' => 'live',
                    'B' => 'lives',
                    'C' => 'living',
                    'D' => 'lived',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "early"?',
                'options' => [
                    'A' => 'Fast',
                    'B' => 'Late',
                    'C' => 'Quick',
                    'D' => 'Soon',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What do we use to taste food?',
                'options' => [
                    'A' => 'Eyes',
                    'B' => 'Ears',
                    'C' => 'Tongue',
                    'D' => 'Nose',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'My father ___ coffee every morning.',
                'options' => [
                    'A' => 'drink',
                    'B' => 'drinks',
                    'C' => 'drinking',
                    'D' => 'drank',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "meja"?',
                'options' => [
                    'A' => 'Chair',
                    'B' => 'Table',
                    'C' => 'Desk',
                    'D' => 'Shelf',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a profession?',
                'options' => [
                    'A' => 'Doctor',
                    'B' => 'Hospital',
                    'C' => 'School',
                    'D' => 'Market',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'They ___ very happy yesterday.',
                'options' => [
                    'A' => 'is',
                    'B' => 'are',
                    'C' => 'was',
                    'D' => 'were',
                ],
                'answer' => 'D',
            ],

            [
                'question' => 'What is the opposite of "heavy"?',
                'options' => [
                    'A' => 'Strong',
                    'B' => 'Light',
                    'C' => 'Large',
                    'D' => 'Thick',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "burung"?',
                'options' => [
                    'A' => 'Bird',
                    'B' => 'Fish',
                    'C' => 'Cat',
                    'D' => 'Dog',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'I ___ a new pencil.',
                'options' => [
                    'A' => 'has',
                    'B' => 'have',
                    'C' => 'having',
                    'D' => 'had',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a place where airplanes arrive and leave?',
                'options' => [
                    'A' => 'Airport',
                    'B' => 'Hospital',
                    'C' => 'Library',
                    'D' => 'Restaurant',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "noisy"?',
                'options' => [
                    'A' => 'Loud',
                    'B' => 'Quiet',
                    'C' => 'Busy',
                    'D' => 'Fast',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'He ___ a letter yesterday.',
                'options' => [
                    'A' => 'write',
                    'B' => 'writes',
                    'C' => 'wrote',
                    'D' => 'writing',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "kamar tidur"?',
                'options' => [
                    'A' => 'Bathroom',
                    'B' => 'Kitchen',
                    'C' => 'Bedroom',
                    'D' => 'Living room',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'Which one is used to tell time?',
                'options' => [
                    'A' => 'Clock',
                    'B' => 'Plate',
                    'C' => 'Spoon',
                    'D' => 'Bag',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the English word for "dapur"?',
                'options' => [
                    'A' => 'Bedroom',
                    'B' => 'Kitchen',
                    'C' => 'Bathroom',
                    'D' => 'Garden',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "happy"?',
                'options' => [
                    'A' => 'Glad',
                    'B' => 'Sad',
                    'C' => 'Excited',
                    'D' => 'Proud',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'She ___ English every day.',
                'options' => [
                    'A' => 'study',
                    'B' => 'studies',
                    'C' => 'studying',
                    'D' => 'studied',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "sepatu"?',
                'options' => [
                    'A' => 'Shirt',
                    'B' => 'Hat',
                    'C' => 'Shoes',
                    'D' => 'Socks',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'Which one is a school object?',
                'options' => [
                    'A' => 'Pencil',
                    'B' => 'Plate',
                    'C' => 'Spoon',
                    'D' => 'Cup',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "big"?',
                'options' => [
                    'A' => 'Large',
                    'B' => 'Small',
                    'C' => 'Wide',
                    'D' => 'Tall',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'They ___ basketball every Saturday.',
                'options' => [
                    'A' => 'play',
                    'B' => 'plays',
                    'C' => 'playing',
                    'D' => 'played',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the English word for "hidung"?',
                'options' => [
                    'A' => 'Mouth',
                    'B' => 'Eye',
                    'C' => 'Nose',
                    'D' => 'Ear',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the opposite of "inside"?',
                'options' => [
                    'A' => 'Under',
                    'B' => 'Outside',
                    'C' => 'Behind',
                    'D' => 'Near',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'My sister ___ a beautiful song.',
                'options' => [
                    'A' => 'sing',
                    'B' => 'sings',
                    'C' => 'singing',
                    'D' => 'sang',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "kebun"?',
                'options' => [
                    'A' => 'Garden',
                    'B' => 'Forest',
                    'C' => 'Farm',
                    'D' => 'Field',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'Which one is a farm animal?',
                'options' => [
                    'A' => 'Lion',
                    'B' => 'Tiger',
                    'C' => 'Cow',
                    'D' => 'Elephant',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'We ___ dinner together every evening.',
                'options' => [
                    'A' => 'eat',
                    'B' => 'eats',
                    'C' => 'eating',
                    'D' => 'ate',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the English word for "pakaian"?',
                'options' => [
                    'A' => 'Clothes',
                    'B' => 'Shoes',
                    'C' => 'Bag',
                    'D' => 'Hat',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "right"?',
                'options' => [
                    'A' => 'Correct',
                    'B' => 'Left',
                    'C' => 'Straight',
                    'D' => 'Good',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'He ___ very tall.',
                'options' => [
                    'A' => 'am',
                    'B' => 'are',
                    'C' => 'is',
                    'D' => 'be',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "jam"?',
                'options' => [
                    'A' => 'Clock',
                    'B' => 'Watch',
                    'C' => 'Calendar',
                    'D' => 'Time',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'Which one is a vehicle?',
                'options' => [
                    'A' => 'Bus',
                    'B' => 'House',
                    'C' => 'Chair',
                    'D' => 'Table',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "strong"?',
                'options' => [
                    'A' => 'Powerful',
                    'B' => 'Weak',
                    'C' => 'Healthy',
                    'D' => 'Brave',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'I ___ water every morning.',
                'options' => [
                    'A' => 'drink',
                    'B' => 'drinks',
                    'C' => 'drinking',
                    'D' => 'drank',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the English word for "pasar"?',
                'options' => [
                    'A' => 'Market',
                    'B' => 'School',
                    'C' => 'Hospital',
                    'D' => 'Office',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'Which one is a body part?',
                'options' => [
                    'A' => 'Finger',
                    'B' => 'Pencil',
                    'C' => 'Bottle',
                    'D' => 'Book',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'She ___ her mother every day.',
                'options' => [
                    'A' => 'help',
                    'B' => 'helps',
                    'C' => 'helping',
                    'D' => 'helped',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the English word for "langit"?',
                'options' => [
                    'A' => 'Sky',
                    'B' => 'Cloud',
                    'C' => 'Star',
                    'D' => 'Sun',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'What is the opposite of "fast"?',
                'options' => [
                    'A' => 'Quick',
                    'B' => 'Slow',
                    'C' => 'Rapid',
                    'D' => 'Speedy',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'They ___ in the classroom now.',
                'options' => [
                    'A' => 'is',
                    'B' => 'am',
                    'C' => 'are',
                    'D' => 'be',
                ],
                'answer' => 'C',
            ],

            [
                'question' => 'What is the English word for "telur"?',
                'options' => [
                    'A' => 'Egg',
                    'B' => 'Milk',
                    'C' => 'Bread',
                    'D' => 'Rice',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'Which one is a drink?',
                'options' => [
                    'A' => 'Juice',
                    'B' => 'Rice',
                    'C' => 'Bread',
                    'D' => 'Meat',
                ],
                'answer' => 'A',
            ],

            [
                'question' => 'My father ___ a newspaper every morning.',
                'options' => [
                    'A' => 'read',
                    'B' => 'reads',
                    'C' => 'reading',
                    'D' => 'reader',
                ],
                'answer' => 'B',
            ],

            [
                'question' => 'What is the opposite of "new"?',
                'options' => [
                    'A' => 'Fresh',
                    'B' => 'Young',
                    'C' => 'Old',
                    'D' => 'Modern',
                ],
                'answer' => 'C',
            ],
        ];


        foreach ($questions as $item) {

            $question = Question::create([
                'subject_id' => $subject->id,
                'payload' => $item['question'],
                'score' => 1,
                'is_active' => true,
            ]);

            foreach ($item['options'] as $key => $option) {
                Answer::create([
                    'question_id' => $question->id,
                    'option' => $key,
                    'answer' => $option,
                    'is_correct' => $key === $item['answer'],
                    'is_active' => true,
                ]);
            }
        }
    }
}
