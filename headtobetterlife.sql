-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 06:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `headtobetterlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `username` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `blog` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`username`, `title`, `description`, `blog`) VALUES
('Anonymous', 'Depression', 'Depression (major depressive disorder) is a common and serious medical illness that negatively affects how you feel, the way you think and how you act. Fortunately, it is also treatable. Depression ca', ' Depression affects more than 264 million peopleTrusted Source worldwide â€” yet it can be hard for some people who live with depression to find the resources they need.\r\n\r\nWhether itâ€™s a safe space to anonymously share your feelings, useful self-care methods, or the latest in mental health research, you can turn to these blogs and know that you arenâ€™t alone.  Depression is fairly common, affecting more than 15 million adults in the United States. Depression is also the leading cause of disa');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `S.NO.` int(200) NOT NULL,
  `BOOK_NAME` varchar(50) NOT NULL,
  `ABSTRACT` varchar(500) NOT NULL,
  `URL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`S.NO.`, `BOOK_NAME`, `ABSTRACT`, `URL`) VALUES
(0, 'Love for a Deaf Rebel: Schizophrenia on Bowen Isla', 'Love for a Deaf Rebel introduces readers to a vivacious Canadian woman who was born into a silent world and with the foundation for schizophrenia. There are other books about discovering schizophrenia in the family and about deaf woman-hearing man relationships, but none that tells the true story of a woman who struggled with both.', 'https://www.smashwords.com/books/view/1076109'),
(1, 'A Walk In My Shoes: An Autobiographical Self-Help ', 'What started out as an autobiography to pass on to my future grandchildren turned into so much more. I have created a series of stories that will show you what the emotional state of a mentally and physically handicapped person is, and what lead up to that. For the handicapped, know that you aren\'t alone and I understand !', 'https://www.smashwords.com/books/view/1067248'),
(2, 'AA Abbreviated', 'Getting sober in AA or other twelve step programs.', 'https://www.smashwords.com/books/view/1060935'),
(3, 'Buah Dan Tanaman Herbal Yang Berkhasiat Untuk Meng', 'Mengenal Berbagai Buah Dan Tanaman Herbal Yang Berkhasiat Untuk Menghilangkan Stress Serta Depresi Plus Menjadikan Jiwa Menjadi Lebih Tenang Edisi Bilingual Dalam Bahasa Indonesia Dan Bahasa Sunda.', 'https://www.smashwords.com/books/view/1060929'),
(4, 'Refreshing Mindset Made Easy', 'Do you feel worried, frightened, nervous, frustrated, depressed, confused? Are your relationships a hot mess, and you\'re exhausted by the daily drama? Do you feel out of control, but do you want peace? Are you fed up with being sick and tired? Are you stuck worrying about the worst-case scenario for everything?\nIf you can ditch your excuses and take back your authority, this book is for you!!!', 'https://www.smashwords.com/books/view/1060894'),
(5, 'Antidepressiva', 'Depressief? Zoek niet naar excuses; zoek naar oplossingen.\nTwintig verhalen vol informatie en humor, twee krachtige wapens om depressies mee te bestrijden.\nEen depressieve zeurpiet denkt nu: «Antidepressiva in boekvorm? Werkt bij mij niet.» O nee? Lees gewoon dit boek. Óf je bent voorgoed genezen, óf je voelt je fantastisch omdat je gelijk hebt gehad. Lach je daarom? Natuurlijk. Het werkt nu al!', 'https://www.smashwords.com/books/view/1059735'),
(6, 'I Can\'t Fix You--Because You\'re Not Broken: The Ei', 'Peppered with personal examples and a playful, warm style, this accessible owner’s manual for the mind offers practical advice, relief, and loving encouragement for anyone struggling with emotional or physical pain who has become frustrated with traditional approaches and is ready to try something different.', 'https://www.smashwords.com/books/view/1054918'),
(7, 'Butchered by “Healthcare”  What to Do About Doctor', 'HOW YOU CAN SURVIVE “HEALTHCARE,” THE LARGEST AND MOST CORRUPT INDUSTRY IN AMERICA.  ?? Learn what works. ? See through the lies. ? Handle hospitals. ? Find trustworthy doctors. ? Master your drugs and quit them with confidence. ? Consider holistic medicine.', 'https://www.smashwords.com/books/view/1046730'),
(8, 'Lost and Misunderstood in Psychiatry but Offering ', 'This book described my struggles in surviving through an oppressive and harmful psychiatric system and lack of good communication with people that misunderstood me. Psychiatry has been oppressive towards me and caused tremendous amounts of personal stress, distress, anguish, and duress. Writing this book expresses the real me and I appreciate your time reading my tumultuous travels and triumphs.', 'https://www.smashwords.com/books/view/1042604'),
(9, 'Men\'s Mental Health', 'A brief read for any man suffering from anxiety or depression, offering advice on how to keep safe, keep going and live life to the full.', 'https://www.smashwords.com/books/view/1031017'),
(10, 'The New Normal: A Spiritual, Metaphysical, and Com', 'This book will help you to rise above the current climate of fear, turmoil, sadness, and uncertainty so that you may view what is going on right now from a higher vantage point and from the viewpoint of one who is mentally stable, emotionally mature, and spiritually grounded. If you\'ve found yourself pulled into the drama of this worldwide crisis and feel like you need a break from it, here it is.', 'https://www.smashwords.com/books/view/1019995'),
(11, '?????????, ?????????? ? ?????? ?????? ?? ?????????', '? ???? ?????? ?????? ?? ????????? ??-?????:\n-> ???? ??? ? ?????? ?? ????????? ????? ???????? ????????? ??????????, ?? ?? \"???????? ??? ???????? ????????????? ????????? ? ????????? ??????? ? ????? ?? ?????????????? ??????\" ?????? ?? \"??????? ? ??????????? ? ????\" ? ???...', 'https://www.smashwords.com/books/view/1009498'),
(12, 'Mom’s Favorite Reads eMagazine March 2020', 'The March 2020 issue of Mom’s Favorite Reads, the magazine for the modern Mom.', 'https://www.smashwords.com/books/view/1007306'),
(13, 'An Anxiety Story - How I Recovered From Anxiety, P', 'I was you. I was once afraid, anxious, confused and lost. Crippled with panic attacks, trapped by agoraphobia, and riddled with constant anxiety, I nearly lost everything.  This is the story of my journey through anxiety, panic disorder, and agoraphobia. Let me share with you my path from an anxious nightmare, to a full, happy, normal life. A life no longer controlled by anxiety and fear.', 'https://www.smashwords.com/books/view/1003071'),
(14, 'Mom’s Favorite Reads eMagazine February 2020', 'The February issue of Mom’s Favorite Reads, the eMagazine for the modern Mom', 'https://www.smashwords.com/books/view/1002850'),
(15, 'To Be A Man', '“Be a man.” “Man up.” How often do we hear these words? What do they even mean?\n\nThere is a lot of confusion about what it means to be a man today. Men and boys receive confusing, often conflicting information about how to behave as men should, which often leaves them uncertain, insecure, and feeling lost.', 'https://www.smashwords.com/books/view/994496'),
(16, 'How to Make Fear Your Friend', 'Learn to master fear and feel calm and confident on a daily basis.  This short ebook will give you the key information you need to understand what fear is, reduce the amount of anxiety your feel, and even use your feelings of fear to help you grow stronger emotionally.', 'https://www.smashwords.com/books/view/986132'),
(17, 'A Survivor’s Guide to Alice in Wonderland Syndrome', 'Almost no one enjoys feeling like a robot, or like an alien parasite inside of their own bodies. This is a guide, survivor to survivor, on how to push through attacks of depersonalisation or derealisation disorder and come out sane on the other side.', 'https://www.smashwords.com/books/view/959128'),
(18, 'What Works - Solid, Simple Ways to Comfort Your An', 'This straightforward practical guide contains no fluff, no backstory – only the strategies you need to get through the day if you’re living with anxiety.  Here’s my latest project, the result of two years of collating what was effective in allowing me to continue working and writing during a bout of severe anxiety. Please review and let others know if you found this book helpful.', 'https://www.smashwords.com/books/view/957091'),
(19, 'Creative Reflection : Finding Yourself through Fun', 'Sometimes there\'s too much going on in our heads and we just need to let it out and clear up space before we can reflect on everything and gently analyze the layers of our thoughts and emotions. This is a fun type of inner work that brings about effects and plans for the outer world.', 'https://www.smashwords.com/books/view/947860'),
(20, 'Surviving Jamaica', 'Surviving Jamaica tells the story of Seamanto \"Sam-Lesly\" Leslie - a young Jamaican female who, through her experiences, tells us what it has been like for her living and surviving in the beautiful country of Jamaica, She takes you on her journey to her past and lives through time once more, only that this time... she\'s putting it all on the table - breaking her silence.', 'https://www.smashwords.com/books/view/934221'),
(21, 'Transtornos Emocionais: bases neuroquímicas e farm', 'O presente trabalho, de revisão e de síntese, oferece aos estudantes e aos profissionais de saúde não psiquiatras, uma visão didática básica dos transtornos emocionais, sua neuroquímica e sua terapêutica.', 'https://www.smashwords.com/books/view/921566'),
(22, 'Running Wild: In a Noisy World', '...After marvelling at Michelangelo’s David, a young man approached the famous sculptor and asked him, “How on earth did you create such a beautiful piece of art?”\n“It was simple,” Michelangelo replied. “I just chipped away everything that didn’t look like David.”\nThis book is about chipping away from yourself the things that aren’t you—The Noise.', 'https://www.smashwords.com/books/view/918047'),
(23, 'The Cure for Everything', 'How to handle psychic illness. A guide to find the right mindset.\nI show you a way to find an answer or a solution to any possible issue. There is a cure to everything if you have the right mindset. This you got when you read this book.', 'https://www.smashwords.com/books/view/914724'),
(24, 'Programa do Máquina de Emagrecer', 'Um resumo dos principais passos do método adotado pelo Máquina de Emagrecer, extrato dos principais passos do livro, no formato (8 módulos) do Programa do Máquina de Emagrecer', 'https://www.smashwords.com/books/view/909553'),
(25, '10 Ways To Practice Self Care So You Can Start Lov', 'Designed to help you understand and improve your symptoms of anxiety and depression. This book outlines actionable information and strategies you can use to fight and overcome anxiety and depression so you can unlock a happy, peaceful, and meaningful life. The knowledge in this guide—when implemented—will help you reclaim your life!', 'https://www.smashwords.com/books/view/809812'),
(26, 'Screaming in Silence / Trauma Poetry and WW1 Short', 'Tony McNally covers a wide range of subject matter, Politics, murder, homelessness, divorce, Religion and obviously War, McNally hits the readers with the ferocity of an exploding grenade then the gentleness of a poppy petal blowing gracefully in the summer breeze. \n\nwww.tonymcnally.co.uk', 'https://www.smashwords.com/books/view/766097'),
(27, 'Take Control of Your Thoughts, Take Control of You', 'Taking control of one\'s life begins with taking control of one\'s thought life. \"Take Control of Your Thoughts, Take Control of Your Life,\" is a quick but powerful read.The information in this book is truly life changing.', 'https://www.smashwords.com/books/view/734826'),
(28, 'Victory Over Depression With and Without Medicines', 'Dr. Isbell provides a unique personal and professional perspective on identifying and treating depression.  She helps her patients make informed decisions as they journey along their unique path to healing emotionally, physically, and spiritually.   She helps foster hope on the way to helping readers achieve relief and healing from depression.', 'https://www.smashwords.com/books/view/733915'),
(29, 'The Power of the Lion\'s Mane Mushroom: Regenerate ', 'The Lion\'s Mane Mushroom has been nicknamed the \"Gift of God\" and for pretty good reasons. This is the brain mushroom. The secret to this amazing medicinal mushroom is its ability to improve nerve growth factor in the brain.', 'https://www.smashwords.com/books/view/727513'),
(30, 'My Husband\'s Under Here Somewhere: Collectors, Pac', 'Morbidly fascinating tales of hoarders and collectors abound as our acquisitive culture is examined. A professional clutter-buster and a mental health nurse offer funny and compassionate commentary on hoarders and collectors who spin out of control. The science behind hoarding—including its link with Obsessive-Compulsive disorders—as well as promising forms of treatment add to the mix.', 'https://www.smashwords.com/books/view/726480'),
(31, 'The Bipolar Family Cure: How to end the arguing, o', 'Wouldn’t it be great to stop the fighting, overspending, lying, anger, manipulation, and irresponsibility? Wouldn’t you like to get your normal life back, get control over your time, and live stress free? This book helps you do all that and more, with easy-to-understand information, instructions, examples, and case studies.', 'https://www.smashwords.com/books/view/724893'),
(32, 'Becoming Hygge', 'Hygge – a simple word, a depth of meaning.\n\nLet this book show you how to experience the omnipresent and pleasurable feeling of hygge. \n\nLet it take you from the first blink of your eyes in the morning, through the challenges of work, to the last blink in the night and get curious about what \nto do in between!', 'https://www.smashwords.com/books/view/715774'),
(33, 'Body and Balance - Relaxation - Yoga Nidra', 'Jill Healy-Quintard of Body and Balance guides you through the simple exercise of relaxation or Yoga Nidra', 'https://www.smashwords.com/books/view/711619'),
(34, 'The 40 Day Dopamine Fast', 'Refined sugar, processed fats, alcohol, TV (including video games), caffeine, tobacco, pornography and social media all get the chop in Greg Kamphuis\' ruthless effort to hunt down the source of motivation and meaning.', 'https://www.smashwords.com/books/view/703823'),
(35, 'Surviving Grief - Working through the 5 Stages of ', 'A handy, easy to read, resource of validation and encouragement for all who have survived the trauma of abuse.', 'https://www.smashwords.com/books/view/696431'),
(36, 'An Affirmation Poem of Peace and Harmony', 'This is an Affirmation Poem of Peace and Harmony. Self-help. It makes you strong and will up your performance and a faith. To whom who needs a help and support. Free book', 'https://www.smashwords.com/books/view/679889'),
(37, 'Gnarled Tree: PTSD and the Ancient Wisdom of Wilde', 'Gnarled Tree: PTSD and the Ancient Wisdom of Wilderness chronicles the story of William Katzhaus, from the crime committed against him at age six, through boyhood, and to maturity battling Post Traumatic Stress Disorder. Like a gnarled tree in the wilderness, Katzhaus endures a lifetime of struggle, but still lives on.\n\nBy understanding the ancient wisdom of wilderness and embracing the wildness w', 'https://www.smashwords.com/books/view/663702'),
(38, 'Herbs for Depression and Anxiety', 'HERBS FOR DEPRESSION AND ANXIETY: LEARN HOW TO RELIEVE THE SYMPTOMS OF DEPRESSION AND ANXIETY, ANXIETY DISORDER, PANIC ATTACKS AND STRESS MANAGEMENT', 'https://www.smashwords.com/books/view/659477'),
(39, 'The Zen Gardens Stress Cure - Four Seasons of Rela', 'Every section will provide you with mini poems or Haiku to inspire you while reading it. \n\nYou will also see some images to enlighten you more about what is being discussed.\n\nZen garden images represent a particular Zen garden that is perfect for each season and are especially created for a particular season in which can inspire you in making your own miniature Zen garden.', 'https://www.smashwords.com/books/view/658130'),
(40, 'The Recidivist: Addicted to Rehab', 'What happens when you start to like rehab? A gut-wrenching tale of alcoholism, addiction and rehab.', 'https://www.smashwords.com/books/view/657148'),
(41, 'ADD and The Blues', 'A concise guide to Inattentive ADHD and depression in adults.', 'https://www.smashwords.com/books/view/633777'),
(42, 'Color Creativity and Relaxation Book 1', '36 \"all-natural\" hand-drawn patterns and designs for coloring relaxation and creativity.Rid yourself of stress and switch on your right brain as you color.Note that this electronic version of the book is not intended for coloring. You will be directed inside the book to a link that will allow you to download a FREE pdf version.', 'https://www.smashwords.com/books/view/630807'),
(43, 'Preventing Drug Addiction: A Guide', 'The best treatment for drug addiction is prevention. The best prevention is comprehensive knowledge before choosing to try a drug. This book provides that crucial knowledge.', 'https://www.smashwords.com/books/view/614741'),
(44, 'The Fated Bus Ride Home', 'A true short story account of the need to educate the uninformed about the reality of addiction and the truth of recovery being possible. Drug addiction and recovery is still so misunderstood and riddled with ignorance and judgement. This story will open eyes and alter perceptions for the better.', 'https://www.smashwords.com/books/view/611552'),
(45, 'Mending The Mind', 'Here is a fascinating perspective of mental illness in the 20th century. It was written by the psychiatrist Dr J. F. J. Cade who is world famous for his discovery of the lithium treatment of manic depression - now known as bipolar disorder. He also discusses schizophrenia, anxiety, epilepsy, melancholia, masturbational madness, ECT and leucotomy and describes the evolution of mental asylums.', 'https://www.smashwords.com/books/view/564302'),
(46, '9 Quick and Easy Mindfulness Practices', 'No time to meditate? Not a problem! These 9 quick and easy mindfulness practices will help you reduce stress, anxiety and bring more joy in your daily life. These practices don\'t take more than one minute. The quickest practice only takes six seconds.', 'https://www.smashwords.com/books/view/607066'),
(47, 'Heartfulness Magazine Issue 4', 'You will find articles on creating harmony within the family, how we subtly communicate with plant life, the efficacy of transmission in meditation and the beauty of simplicity. In our children’s section, youth are invited to explore our blue planet and hear the final chapter in King Vikram’s allegorical tale. May your year, dear reader, be filled with inspired moments and blessings.', 'https://www.smashwords.com/books/view/605036'),
(48, 'The Diary of David Alexian: Using Words to Light M', 'Putting words down can have true meaning; lead to poetry, redemption, self discovery and healing.', 'https://www.smashwords.com/books/view/600065'),
(49, 'How to Overcome Depression', 'In the past decade, depression rates have skyrocketed, and one in four Americans will suffer from major depression at some point in their lives. Where have we gone wrong? Steve Pavlina sheds light on our current predicament and reminds us that our bodies were never designed for the sleep-deprived, poorly nourished, frenzied pace of twenty-first century life.', 'https://www.smashwords.com/books/view/581901'),
(50, '30 Habits for Highly Successful Living', 'An initiation into the secrets of channeling the hidden power of the unconscious and driving your life with focus, purpose and determination.', 'https://www.smashwords.com/books/view/578916'),
(51, 'Feel Better Faster: Time and Money Saving Advice f', 'A concise, down-to-earth article about making the most out of proven therapy options for dealing with anxiety and depression. This booklet includes information on how to go about seeking help when you\'re anxious or depressed, and how to get the most out of talk therapy, medication, physical exercise and alternative therapies such as yoga and supplements.', 'https://www.smashwords.com/books/view/565337'),
(52, '??????', '?????????????? ????? ? ??? ??. ???? ??? ???? ???? ???????? ???. ?????? ?? ?? ??? ????? ??. ?????? ?????? ????? ?? ?????? ???????? ???? ?. ???? ??? ???????? ??? ??????? ?? ????-????? ?? ?????? ??????? ??????? ???? ??????? ??? ?????? ?????.  ?????????? ???? ??? ??????? ???????? ?? ?????? ??. ??? ?? ??? ??????? ??? ?????????? ?? ? ?????? ????? ???? ??? ???? ????? ?? ???? ????.', 'https://www.smashwords.com/books/view/552561'),
(53, 'Relax! Good Ways to Beat Stress', 'This book shows you a dozen ways that you can get immediate relief from stress and feel good. It then demonstrates even more ways of tackling the actual causes of your stress and teaches you how you can relax permanently. Deep relaxation, yoga, massage, exercise, a mental body scan and progressive muscle relaxation are just some of the techniques described. It is practical and easy-to-follow.', 'https://www.smashwords.com/books/view/549536'),
(54, 'Borderline Personality Disorder: The Basics', 'Typically, borderline personality disorder is defined as a mental health disorder that causes people to have turbulent feelings which result in turbulent actions. More often than not, these feelings and actions occur over an extended period of time. Therefore, a diagnosis of borderline personality disorder cannot be made unless an individual has displayed these characteristics for several months.', 'https://www.smashwords.com/books/view/547656'),
(55, 'How To Think About Death (And Life)', 'Death is one of the only certain things in our lives, but we rarely talk or even think about it.\n \nYet being able to think about death in a wise way is a critical life skill, as it could enable us to live fuller, better lives while we have the chance and, possibly, die better deaths.  So, this booklet explores some ways we could begin to contemplate the subject of death.', 'https://www.smashwords.com/books/view/544422'),
(56, 'Facing The Truth About Oneself', 'It appears as though I have done it.', 'https://www.smashwords.com/books/view/543053'),
(57, 'How Not To Be Happy: 63 Things I Learned In A Psyc', 'Coming from a long and colorful line of mental illness and alcoholism in my family, it is no wonder I became a social worker.  Over my 20+ years of experience, I have seen common themes.  My book highlights my own experiences, as well as, those I have had the privilege to work with.  Please read this book with an open mind and an open heart.', 'https://www.smashwords.com/books/view/541831'),
(58, 'Time Will Tell', 'Read at your convenience.', 'https://www.smashwords.com/books/view/541522'),
(59, 'Asperger\'s and the Pursuit of Joy: The Key to Powe', 'Young adults with Asperger\'s disorder face unique challenges when it comes to overcoming failure to launch syndrome.  Ryan\'s inspirational story about how he is now living independently and learning to have fulfilling relationships, work, and hobbies is sure to encourage and inspire.', 'https://www.smashwords.com/books/view/540442'),
(60, 'Anxiety Cure Workbook : 3 Quick Steps To Stop Anxi', 'In order for you to deal with anxiety you need to learn how to deal with things better. Everybody has emotional stress in their lives at some point but what separates people that suffer with anxiety disorders and those that don’t are how they cope and deal with those emotional stresses.\nGrab the book to learn more!', 'https://www.smashwords.com/books/view/538062'),
(61, 'Escape the Hidden Dangers of Emotional Manipulatio', 'Escape the Hidden Dangers of Emotional Manipulation shares information on what emotional manipulation is, how it affects the victims, and why breaking the cycle of emotional abuse should be a priority.', 'https://www.smashwords.com/books/view/531017'),
(62, 'Natural Ways To Help Manage Your Depression', 'If you or somebody you know suffers from depression, you will be looking for as many ways as possible to deal with it. Having lived with depression for 21 years, Juliet Atherton speaks to you with experience at her side to offer an insight into how to deal with depression naturally. This book shows you the methods to assist you with coping and help you to come out on top.', 'https://www.smashwords.com/books/view/527457'),
(63, 'Staying Alive', 'Overcoming depression and suicidal thoughts by someone who has been there. Real answers, not a pat on the head.', 'https://www.smashwords.com/books/view/523541'),
(64, 'How To Be Alone (But Not Lonely)', 'Loneliness has been described as a modern problem that can affect our health as badly as smoking or obesity.  Yet, many people yearn for solitude and space in our busy, people-filled society.   This booklet explores what it means to be alone in modern society, including the serious effects of loneliness, the useful possibilities of solitude and the influence modern society has on both these things', 'https://www.smashwords.com/books/view/522023'),
(65, 'Memory Loss - Understanding What Causes, Its Sympt', 'We all experience bouts of memory loss, but do we really know what it is and why it occurs? This book will conquer the myths and delve into why this much-feared diagnosis occurs. If you are experiencing memory loss, there are some minor lifestyle tweaks that may ease your suffering. This book outlines the signs and symptoms to look for and provides healthy tips to prevent memory lapses.', 'https://www.smashwords.com/books/view/521024'),
(66, 'Evil Spirits in Psychotherapy: Accounts by Therapi', 'The author, a licensed clinical social work practitioner, utilizing dissociative techniques repeatedly encountered with his clients what he considers to be spirit phenomena, including evil spirits. Included are reports by other professionals of similar encounters.', 'https://www.smashwords.com/books/view/512845'),
(67, 'dMAC Digest Volume 5 No 1 - Breast is Best', 'We look at the latest medical information on Breast-feeding and Combating Infant Malnutrition. What should babies be fed and how often? Does breast-feeding improve improve my baby\'s IQ? How good is baby formula and when should babies be introduced to solid foods. We also investigate Tourette\'s Syndrome, or Tic Attack, which afflicts up to 18% of all children. Finally Stress Management is reviewed.', 'https://www.smashwords.com/books/view/512651'),
(68, 'Geriatric Depression: Knowing the Basics', 'This is a quick easy read to inform about the basics of Geriatric Depression.  This book is an overview of symptoms, diagnosing, effects, and treatments for Geriatric Depression.  If you or a loved one suffers from Geriatric Depression; this is a great book for you to learn the basics, and to start you on the path to recovering and leading a happier healthy life.', 'https://www.smashwords.com/books/view/509299'),
(69, 'Mental Health Education in Ancient Indian Literatu', 'This is a refined version of PhD. thesis in psychology. Eastern Approach of mental health education is found in Ancient Medical Texts, Ancient Yogic Texts and other Ancient sacred texts of India, Srilanka etc. It contains 27 components of Prevention, tips helpful in increasing various mental capabilities like memory, intellect etc.', 'https://www.smashwords.com/books/view/502889'),
(70, 'A Developmental Perspective on Asperger\'s Disorder', 'In this mini ebook, Robert Fischer, M.D., psychiatrist and Executive Director at the Optimum Performance Institute, a residential mental health treatment facility for young adults in Southern California, discusses the development of Asperger\'s from childhood into early adulthood.', 'https://www.smashwords.com/books/view/501834'),
(71, 'The Weatherboard Shed- My Battle of Surviving Chil', 'I am an Adult Survivor of Child Sexual Assault. Eighteen months ago I recovered memories of being sexually assaulted for two years between the ages of 4 & 6. \nMy book, The Weatherboard shed, is a short story of my experiences, as well as providing helpful information and support for other survivors and their families.', 'https://www.smashwords.com/books/view/495727'),
(72, 'The Mental Health Debacle - Claim Against Evil', 'January 2013 was the beginning of the most traumatic period in my life, in the 7 months that followed I experienced many of the symptoms commonly associated with mental health disorders. As I suspected however that there was more to my experience than a \'chemical imbalance\' in my brain, I set out on a journey to understand what was happening myself.', 'https://www.smashwords.com/books/view/494471'),
(73, 'Become Smarter', 'This book describes techniques for improving mental abilities (cognitive enhancement). The proposed methods are brief cooling or heating of the body (water therapy) and three \"smart diets,\" each suitable for a different type of task. Previously published scientific studies directly support about a half of the claims.', 'https://www.smashwords.com/books/view/491861'),
(74, 'The Map of Your Life', 'Have you ever noticed that different people can have almost exactly the same thing happen to them, yet they respond in very different ways? Why is this? And, more importantly, how can we change our perspectives so that we, too, can see the opportunities that surround us?', 'https://www.smashwords.com/books/view/481132'),
(75, 'Surviving a Life fighting The Black Dog', 'This is my reflection on dealing with living with depression for over 40 years.', 'https://www.smashwords.com/books/view/479581'),
(76, 'Balance', 'This book explores what lies behind our behavior, so that we can adjust and balance our lives. It gives insight into psychological ailments, such as depression and addictions . We naturally adapt to circumstances, which can cause bad habits to form. Make the right moves and cut out circuitous loops of behavior that have negative consequences. Cut out hassles - learn to surf life!', 'https://www.smashwords.com/books/view/473884'),
(77, 'Living Bipolar', 'Living Bipolar is a collection of stories of bipolar people, and uses their experience, strength, and hope as a guide to recovery for managing the highs and lows in order to live healthy and fulfilling lives.  Living Bipolar also shares stories of  families and friends to help everyone better understand how to live healthy and fulfilling lives with their loved ones who are bipolar.', 'https://www.smashwords.com/books/view/473800'),
(78, 'A Little Book On Happiness', 'A Little Book On Happiness is a concise collection of thoughts on how to change for the better.  It is about learning to say no.  A trip to the Emergency Room serves as a wake up call to the author.  The book written in the days after that event is about focusing on what matters most in life.  It is about clearing away the clutter in all areas of life and choosing and creating happiness.', 'https://www.smashwords.com/books/view/472148'),
(79, 'How to Meet & Fxxx Different & Hot Asian Women: ..', 'If you\'ve ever read a book about dating Asian women before, know that this one will blow your mind with techniques that make you get and have sex with extremely hot Asian women in just minutes after meeting them.', 'https://www.smashwords.com/books/view/471177'),
(80, 'The Passage Of Time: Watching Depression Unfold', 'These are reflections from the days when the hands fall off the clock, when reality fades into muted darknessm despair takes over your life and hope appears to be out of reach.', 'https://www.smashwords.com/books/view/467712'),
(81, 'Hold That Thought Reappraising The Work of Dr Caro', 'Does negative thinking make us sick? Does positive thinking improve our health and well-being? The popular Christian author, Dr Caroline Leaf, thinks so. Modern science disagrees.  With 20 years experience in clinical medicine, & backed up by 300 current scientific references, Dr Pitt highlights the current science on thought & stress, & provides a new perspective on Dr Leafs writing and teaching.', 'https://www.smashwords.com/books/view/466848'),
(82, 'Living Bipolar', 'Learning to live with bipolar disorder can be the toughest part of having it.\n\nIn \"Living Bipolar\" you\'ll start at the beginning with what to expect from your first appointments with your medical team, to self help, support and more. It is the first in the series \"My Bipolar World\" by author Sylvia Meier.', 'https://www.smashwords.com/books/view/464412'),
(83, 'Depression', 'Depression hurts, and it\'s true. It hurts not only the person, but the family and other people. This short book talks about what depression is, the types of depression, and what you can do to help. It contains all the basic information and what you can do to help someone.', 'https://www.smashwords.com/books/view/452931'),
(84, 'Rose Petals of Inspiration - An Uplifting Book of ', 'This book includes the personal story of how one woman courageously overcame overwhelm, panic, and anxiety, coupled with a crippling dependence on sleeping pills, only to discover powerful insights for establishing and maintaining inner peace. This book will walk you through six chapters of delightful wisdom designed to inspire thought and heart-provoking empowerment.', 'https://www.smashwords.com/books/view/439098'),
(85, 'Egocéntricas Miserias - Una puerta a mi mente bord', 'Si usted, o un ser querido, sufre de alguna enfermedad mental como bipolar, borderline, depresión, ansiedad, fobias, etc., la lectura de estos artículos escritos por Rebeca (bipolar, borderline) lo ayudara a identificar y valorar sus emociones y no sentirse solo en el mundo con sus síntomas, pensamientos y acciones. Rebeca relata sus verdaderas experiencias personales y su lucha por sobrevivir.', 'https://www.smashwords.com/books/view/434204'),
(86, 'La Ley de Dios: El Código de la Existencia Humana', 'A lo largo del libro, se presentan varios principios de la existencia, que permiten comprender cómo procesa.', 'https://www.smashwords.com/books/view/431540'),
(87, 'From Survive to Thrive: A resource for recovering ', 'This guide is written by individuals with firsthand experience of struggling with an eating disorder or body image and eating issues. Contributors to this resource have provided basic information and practical advice on how to overcome challenges that are common during the recovery process. The guide is divided into 7 chapters, all addressing questions which people with eating disorders often ask', 'https://www.smashwords.com/books/view/430088'),
(88, 'Faithbook - A Guide to Discover God in times of Sm', 'This book requires serious analysis of what is written. Not for speed reading. It requires slow, thoughtful consideration of the concepts it presents you with. If after reading it you: A.- Believe in God, B.- Believe in God again, or C.- Believe in God more, please leave a positive review.  This modern day guide will transform non-believers into believers without resorting to any religion.', 'https://www.smashwords.com/books/view/419712'),
(89, 'Heaven on Earth: Simple Ways to Be Happy', 'In Heaven on Earth simple tools and techniques are uncovered, that once applied, will enable You to ride through life\'s obstacles on a deep and abiding source of inner peace. You can defeat day-to-day depression, discouragement, anxiety, anger, or just an ordinary bad mood. It is not easy, but it is simpler than you think.', 'https://www.smashwords.com/books/view/379387'),
(90, 'Taking Control of Your Life: How to Dramatically I', 'If you don\'t know, understand, accept and learn from your feelings & emotions, you don\'t really have control over your own life!  Emotional Intelligence is the study of YOU -- how you work, how to motivate, love and enjoy yourself, and how to use that knowledge to live the happiest, most successful life you can.  Here\'s how EQ works, in simple, easy-to-understand, terms that can change your life!', 'https://www.smashwords.com/books/view/360432'),
(91, 'Too Much Spirituality', 'Can There Be Too Much Spirituality?\nSix examples of too much spirituality, plus a Zen Story about the fact that we do not have as much control in our life as we think we have..', 'https://www.smashwords.com/books/view/359670'),
(92, 'SELF HELP FOR SELF HARM', 'I have written this book to give practical help, advice, and techniques to other people who may be going through a hard time in their lives and are using self harm as a coping mechanism. There are alternatives you can use to bring calm to your lives which I\'d like to show you.', 'https://www.smashwords.com/books/view/345000'),
(93, 'My Journal: For Giving Thanks, Getting Restful Sle', 'This journal is a great way to set up a bedtime ritual that allows you to release the day and set up for an optimal quality of sleep and productivity the next day. It allows you to practice daily gratitude which is linked to improvements in mood and overall mental health.', 'https://www.smashwords.com/books/view/335510'),
(94, 'Paranoid: My True Story', 'Scott Johnson\'s Story  -  Have you ever had the whole world unite against you? Have you ever lost every friend you\'ve ever had? Paranoia can take over and control your life. Most people find it hard to believe that some \'thing\' can move into a persons life and control it. But it happened to me.  Paranoia took over my life, lived inside me for six year, and changed my life, forever', 'https://www.smashwords.com/books/view/327927'),
(95, '31 Day Mindfulness Challenge', 'This book is an introduction to mindfulness. It offers a handful of mindfulness techniques to be completed over a month. If you want simple and quick ways to reduce your daily stress and improve your mood, this book is for you.', 'https://www.smashwords.com/books/view/321456'),
(96, 'Haunted House', 'Haunted House is a Social Story designed to help parents explain autism to siblings. It uses the metaphor of living in a haunted house to give the reader insight into what it is like to have autism and why they have difficulties living in our world. As it is a basic explanation of autism, it can be used for all family members and the wider social network surrounding the individual with ASD too.', 'https://www.smashwords.com/books/view/288461'),
(97, 'How To Cope With A Disability', 'I was told about my disability when I could understand a little bit more about it. My mom told me that I was strangled pretty much in the womb.', 'https://www.smashwords.com/books/view/237746'),
(98, 'Major Depression', 'Dr Depression offers techniques and strategies to manage and reduce stress and depression without affecting mental performance.', 'https://www.smashwords.com/books/view/230069'),
(99, 'Managing Schizophrenia - A Personal Perspective', 'Deals with my personal journey with the illness and what I have learnt from a personal perspective to be effective practical and philosophical strategies in dealing with the illness. It can give others suffering from the disease and well as people who have been around them with some insight into the illness.', 'https://www.smashwords.com/books/view/207327'),
(100, 'Is This Normal? A Worrywarts Guide', 'The notion of \"normal\" is a slippery little devil, defying easy definition.  Nonetheless, despite suffering uncomfortable feelings, showing idiosyncratic habits, harboring unique beliefs, holding unusual perspectives, or having out-of-the-ordinary experiences, most of us could be officially diagnosed as quite normal even when we are having intense reactions to the stress of being different.', 'https://www.smashwords.com/books/view/178163'),
(101, 'How to Find a Counselor', 'Life isn\'t quite working as well as you\'d like. You finally decide that you need to talk with someone.\n\nThis brief guide, written by counselor Peggy Haymes, covers common questions such as How do I find a counselor, How do I pay for it, What\'s the differences between coaches and counselors and How long will it last?', 'https://www.smashwords.com/books/view/176615'),
(102, 'Easy Memory Improvement Tips and Techniques for Al', 'This book consists of easy-to-use tips and techniques that anyone can use to improve their memory. The book describes how your memory works, gives tips for remembering names, and talks about how to handle \"blocking\" (when you can\'t remember something and have that feeling that it\'s on the tip of your tongue).', 'https://www.smashwords.com/books/view/144854'),
(103, 'There Are Easy Ways To Help Your Mental And Emotio', 'Your mental and emotional health is just as important as your physical health. When you stop to think about it, your emotional and mental state have a lot to do with your overall health.', 'https://www.smashwords.com/books/view/144010'),
(104, 'Dora\'s Essentials - Examining Anxiety (What\'s Norm', 'What happens when you worry too much? Are you having an anxiety disorder or is worrying normal? How does anxiety affect you and your loved ones? A three part eBook that focuses on these questions and more. \n\nPart 1. Are you really having an anxiety disorder?\nPart 2. Simple techniques to keep your panic attacks from getting the best of you\nPart 3. The less addictive road to curing panic attacks', 'https://www.smashwords.com/books/view/122619'),
(105, 'Procera AVH Memory and Brain Enhancer Supplement', 'The Procera AVH cognitive supplement unveiled by Brain Research Labs is definitely an awesome development in the domain of naturally rejuvenating maximal brain health. The procera avh brain enhancer has undergone numerous medical testing and has demonstrated to be entirely effectual in all case reviews.', 'https://www.smashwords.com/books/view/118438'),
(106, 'SCREEN Therapy - How To Cure Multiple Emotions', 'Cure emotions fast. Patients with emotional problems may not need psychology, psychiatry or\ncounselling! No waffle - just a One Page book of condensed therapy knowledge to help improve lives.\nSimply read or do in a coffee break. About 75% success for sadness, grief, loss, lonely, trauma, anger,\nannoyed, terror, fear, hate and so on. Cheap, quick, effective.', 'https://www.smashwords.com/books/view/112725'),
(107, 'Treating Depression: A Balanced Approach', 'In this project, case vignettes are used to expose the true nature of depression. Several treatment avenues are described as well. The aim of the book is to point out the path towards healing and wellness that always exists within us as our true Self.', 'https://www.smashwords.com/books/view/103393'),
(108, 'Overcoming Depression: A Vignette', 'A compelling vignette discussing depression and its treatments from a balanced perspective.', 'https://www.smashwords.com/books/view/103055'),
(109, 'Dipping into a darkened soul', 'A brief look into one man\'s thoughts on depression, and the paths that have led him to where he stands today.', 'https://www.smashwords.com/books/view/95028'),
(110, 'Healthy Heart, Healthy Mind', 'A book to inspire mums with depression, mental health issues and mums wanting to get healthy.', 'https://www.smashwords.com/books/view/86911'),
(111, 'How NOT to Worry: 5 Simple Tools for Trying Times', 'The author of THE FORGIVENESS BOOK and HOW TO BE SPIRITUAL WITHOUT BEING RELIGIOUS  brings a spiritual perspective to the end of worry. In five concise steps, D. Patrick Miller helps readers reorganize their thought patterns so that they can deal with stress and pressure in the most creative and effective ways possible.', 'https://www.smashwords.com/books/view/84763'),
(112, 'PTSD: A Fifteen Minute Guide to Combat Related Pos', 'A plain language, easy-to-read book about combat related PTSD (post-traumatic stress disorder) to help veterans and loved ones get familiar with this often difficult subject.  It quickly covers what combat PTSD is, what it \"looks\" like, how PTSD changes the brain, treatment options, where to get help, & where to find more info & support.', 'https://www.smashwords.com/books/view/66542'),
(113, 'How to be Happy (No Fairy Dust or Moonbeams Requir', 'Discover the secrets to true, lasting happiness\n\nYou can build the life you want and be truly, genuinely happy on a daily basis. It’s not a trick or a scam, it’s not a bunch of silly nonsense you tell yourself and try to believe, and it’s not outside your power. It’s real, and it’s a gift you can give yourself. Get this book and make it happen.', 'https://www.smashwords.com/books/view/54916'),
(114, '????', '????', 'https://www.smashwords.com/books/view/41291'),
(115, 'Maase Shehaya', 'Esta obra nos presenta una serie de narraciones en donde nos da a conocer la vida y obra de los mas destacados guías espirituales y grande sabios que ha habido en el pueblo de Israel.', 'https://www.smashwords.com/books/view/29853'),
(116, 'Is Your Frog Boiling? Ten Signs That Your Life May', 'Legend says that if you drop a frog into boiling water it will immediately jump out, but if you place a frog into a container of room temperature water and raise the heat, the frog will stay put until it boils to death. \n\n\nDo you ever feel like the frog whose water is slowly getting hotter? Get out of the water! Learn the symptoms of “Boiling Frog Syndrome” and how to prevent them!', 'https://www.smashwords.com/books/view/16817'),
(117, 'School Violence & Workplace Violence: Risk Assessm', 'Risk assessment for violence involves the investigation of five factors:  These factors are 1 ) precipitating events, 2) patterns of direct statements, 3) circumstances that increase the likelihood of violence, 4) signs of cumulative stress, and 5) indicators of lowered risks for violence. This article describes a risk assessment based on these factors.  For school violence and workplace violence', 'https://www.smashwords.com/books/view/10970'),
(118, 'Prescription Drug Abuse: Protect Your Family', 'You need to know how to protect your family from the frightening and devastating effects of prescription drug abuse. “Prescription Drug Abuse: Protect Your Family” provides broad strokes suggestions and guidelines for detecting and preventing prescription drug abuse as well has pointing the way to recovery.', 'https://www.smashwords.com/books/view/10680'),
(119, 'A Parents Guide To Meth Abuse', 'A guide to educate parents on the signs and dangers of methamphetamine use.It covers a brief history of methamphetamine,prevention issues,emotional signs,physical signs and problems caused by prolonged abuse.It also covers things that should be watched for concerning manufacturing activities.Health problems faced from meth abuse are also examined.', 'https://www.smashwords.com/books/view/10187'),
(120, 'The Developmental Psychology of Psychopathology', 'Psychopathology as the outcome of problems in early childhood development.', 'https://www.smashwords.com/books/view/8018'),
(121, 'Narcissism Book of Quotes', 'The Narcissistic Personality Disorder (NPD) and relationships with abusive narcissists and psychopaths: the point of view and lessons of the victims.', 'https://www.smashwords.com/books/view/8016'),
(122, 'Factors that Trigger Depression and Anxiety', 'This eBook is an excellent Self-Help Guide for people suffering from psychiatric conditions such as depression and anxiety disorders.  This eBook has 11 separate articles on various psychiatric disorders.  The causes, symptoms, and treatments for mental health problems has been discussed at length.  Self-Healing techniques are provided to help people free themselves from stress.', 'https://www.smashwords.com/books/view/6125'),
(123, 'Pandemic Influenza:  Mental Health Response', 'A primer on pandemic influenza, for anyone who needs materials quickly. Chapters cover mental health principles, basic information on viruses, responses to public health information, risk management, quarantine, isolation, and other mental health considerations. This book is written primarily for health professionals, but anyone may benefit from reading it.', 'https://www.smashwords.com/books/view/2768'),
(124, 'Disaster Strikes:  Just-In-Time Training', 'First responders, mental health professionals, and primary care providers need quick, low-cost or no-cost training to provide aid at disasters.  This e-book provdes just that.  Chapters cover federal funding, basic clinical principles, mental health topics specific to disasters, risk management, coping skills and more. Individuals can view as many or as few chapters as they need.', 'https://www.smashwords.com/books/view/2767'),
(125, 'When I Grow Up', 'We all experience growing pains.  It can be beautiful and it can be happy, but at the same time, it\'s just what it is:\n\nIt\'s change.', 'https://www.smashwords.com/books/view/655');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `disease`, `message`) VALUES
('Ishita Gupta', 'igupta00271@gmail.com', 'Depressive Disorders', 'Due to depression I started feeling lonely then I started discussing my issues on this platform and this gave really good results and after that I dont feel lonely any more');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `S.NO.` int(50) NOT NULL,
  `SONG_NAME` varchar(100) NOT NULL,
  `URL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`S.NO.`, `SONG_NAME`, `URL`) VALUES
(0, 'All of the Stars', 'https://www.youtube.com/watch?v=nkqVm5aiC28'),
(1, 'Beautiful', 'https://www.youtube.com/watch?v=eAfyFTzZDMM'),
(2, 'Born This Way', 'https://www.youtube.com/watch?v=3Vzrr64ZrVU'),
(3, 'Don\'t Stop Believin\'', 'https://www.youtube.com/watch?v=1k8craCGpgs'),
(4, 'FireFly', 'https://www.youtube.com/watch?v=JigjU373SKY'),
(5, 'Fooling Yourself', 'https://www.youtube.com/watch?v=RwPS19swwiA'),
(6, 'GIRL', 'https://www.youtube.com/watch?v=X0vXCY-h9ks'),
(7, 'Grand Illusion', 'https://www.youtube.com/watch?v=nO62scTZ7Qk'),
(8, 'He Will Hold Me Fast', 'https://www.youtube.com/watch?v=936BapRFHaQ&feature=youtu.be'),
(9, 'Hero', 'https://www.youtube.com/watch?v=0IA3ZvCkRkQ'),
(10, 'Higher Power', 'https://www.youtube.com/watch?v=nEMTu-VxixY'),
(11, 'I\'m Alive', 'https://www.youtube.com/watch?v=WLgLfD3wElQ'),
(12, 'Inner Demons', 'https://www.youtube.com/watch?v=EPJSkSn7rt0'),
(13, 'Its Going to Be Alright', 'https://www.youtube.com/watch?v=p6shQTaUxYo'),
(14, 'I Will Always Love You', 'https://www.youtube.com/watch?v=3JWTaaS7LdU'),
(15, 'I Won\'t Back Down', 'https://www.youtube.com/watch?v=nvlTJrNJ5lA'),
(16, 'Healing Meditation', 'https://open.spotify.com/album/0YOGo8U8fwK6529HcMqUoY?si=FKnz6__CRweajAebjQK73g'),
(17, 'Only Time', 'https://www.youtube.com/watch?v=7wfYIMyS_dI'),
(18, 'Not Dead Yet', 'https://www.youtube.com/watch?v=UZBn18FaLIU'),
(19, 'Seasons of Love', 'https://www.youtube.com/watch?v=hj7LRuusFqo'),
(20, 'Shades Official Music Video', 'https://youtu.be/qzz6sgGjHbg'),
(21, 'Somewhere in Time', 'https://www.youtube.com/watch?v=esrTfwBiOM0'),
(22, 'This is It', 'https://www.youtube.com/watch?v=U8SSdyflGN4'),
(23, 'Unwell', 'https://www.youtube.com/watch?v=WziA88-n02k'),
(24, 'When the Seasons Change', 'https://www.youtube.com/watch?v=8rReM1R-SFw'),
(25, 'Wonder', 'https://www.youtube.com/watch?v=6zpYFAzhAZY'),
(26, 'You Raise Me Up', 'https://www.youtube.com/watch?v=aJxrX42WcjQ');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `age` int(5) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`name`, `email`, `password`, `age`, `dob`, `gender`) VALUES
('Ishita Gupta', 'igupta00271@gmail.com', 'ishita', 22, '1999-01-27', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
