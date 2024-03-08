<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolio = [
            [
                'name' => [
                    'ar' => 'اسالني',
                    'en' => 'AskMe',
                ],
                'description' => [
                    'ar' => 'إذا كان لديك سؤال أو استفسار، يمكنك الدخول إلى تطبيق AskMe، وكتابة سؤالك، وسيقوم أشخاص من نفس المدينة بالرد استنادًا إلى تجاربهم. إذا كنت بحاجة إلى استجابة سريعة، يمكنك دفع مبلغ معين، على سبيل المثال، 10 دولارات، مقابل اشتراك أولوية لمدة 5 ساعات لسؤالك. يمكن للمستخدمين نشر الأسئلة عن طريق اختيار المدينة والفئة، وكتابة السؤال، وتحميل الصور إذا لزم الأمر. هناك خياران: اختيار الاشتراك لتحقيق أولوية السؤال الفوري أو نشر سؤال عادي.',
                    'en' => 'If you have a question or inquiry, you can enter the AskMe application, write your question, and people from the same city will respond based on their experiences. If you need a quick response, you can pay a certain amount, for example, $10, for a 5-hour priority subscription for your question. Users can post questions by choosing the city and category, typing the question, and uploading images if needed. There are two options: choosing to subscribe for instant question prioritization or posting a regular question.',
                ],
                'client' => [
                    'ar' => 'شركة AskMe',
                    'en' => 'AskMe Company',
                ],
                'date' => '2023-11-10',
                'links' => [
                    [
                        'name' => 'App Store',
                        'link' => 'https://apps.apple.com/us/app/%D8%A5%D8%B3%D8%A7%D9%84%D9%86%D9%8A-ask-me/id6475263354',
                    ],
                    [
                        'name' => 'Google Play',
                        'link' => 'https://play.google.com/store/apps/details?id=com.asos.asalny',
                    ],
                    [
                        'name' => 'GitHub',
                        'link' => 'https://github.com/MahmoudAlmalah-ENG/AllMyProject/blob/main/Asalny/README.md',
                    ],
                ],
                'category_id' => 2,
                'status' => true,
            ],
            [
                'name' => [
                    'ar' => ' حرجنا',
                    'en' => 'Harajna',
                ],
                'description' => [
                    'ar' => 'تطبيق حرجنا هو منصة تسوق إلكترونية تتيح للمستخدمين شراء وبيع المنتجات بطريقة آمنة وسهلة. يوفر التطبيق منصة للمستخدمين لإنشاء وإدارة متاجرهم الخاصة، ولشراء وبيع المنتجات من مستخدمين آخرين.',
                    'en' => 'The application is a mobile platform that allows users to buy and sell products in a safe and easy way. The application provides a platform for users to create and manage their own stores, and to buy and sell products from other users.',
                ],
                'client' => [
                    'ar' => 'شركة حرجنا',
                    'en' => 'Harajna Company',
                ],
                'date' => '2023-11-10',
                'links' => [
                    [
                        'name' => 'App Store',
                        'link' => 'https://apps.apple.com/us/app/harajna/id6472904170',
                    ],
                    [
                        'name' => 'Google Play',
                        'link' => 'https://play.google.com/store/apps/details?id=com.visooft.harajna',
                    ],
                    [
                        'name' => 'GitHub',
                        'link' => 'https://github.com/MahmoudAlmalah-ENG/AllMyProject/blob/main/Harajna/README.md',
                    ],
                ],
                'category_id' => 2,
                'status' => true,
            ],
            [
                'name' => [
                    'ar' => 'مدرسة النجاح',
                    'en' => 'Mnhaj Academy',
                ],
                'description' => [
                    'ar' => 'تطبيق مدرسة النجاح هو منصة ويب تتيح للمستخدمين الوصول إلى الدورات التعليمية ونشرها لمواضيع أكاديمية مختلفة. توفر المنصة واجهة تفاعلية وسهلة الاستخدام لكل من المعلمين والمتعلمين.',
                    'en' => 'The application is a web platform that allows users to access and publish courses for different academic subjects. The platform provides an interactive and user-friendly interface for both educators and learners.',
                ],
                'client' => [
                    'ar' => 'مدرسة النجاح',
                    'en' => 'Mnhaj Academy',
                ],
                'date' => '2023-11-10',
                'links' => [
                    [
                        'name' => 'Website',
                        'link' => 'https://mnhajakadmy.online/',
                    ],
                    [
                        'name' => 'GitHub',
                        'link' => 'https://github.com/MahmoudAlmalah-ENG/AllMyProject/blob/main/Mnhaj/README.md',
                    ],
                ],
                'category_id' => 1,
                'status' => true,
            ],
        ];

        foreach ($portfolio as $p) {
            $data = Portfolio::create($p);
            $data->images()->create([
                'table_name' => Portfolio::TABLE,
                'table_id' => $data->id,
                'path' => "{$p['name']['en']}.png",
            ]);
        }
    }
}
