CREATE DATABASE bookreview;
USE bookreview;

-- DROP TABLE Authorship, Report, Book, Author, Reviewer;

CREATE TABLE Book (
  bookId VARCHAR(10) PRIMARY KEY,
  title VARCHAR(100) NOT NULL,
  bookDes VARCHAR(500) NOT NULL
);

CREATE TABLE Author (
  authorId VARCHAR(10) PRIMARY KEY,
  authorName VARCHAR(50) NOT NULL
);

CREATE TABLE Reviewer (
  reviewerId VARCHAR(100) PRIMARY KEY,
  reviewerName VARCHAR(50) NOT NULL
);

CREATE TABLE Authorship (
  bookId VARCHAR(10), 
  FOREIGN KEY(bookId) REFERENCES Book(bookId),
  authorId VARCHAR(10),
  FOREIGN KEY(authorId) REFERENCES Author(authorId),
  PRIMARY KEY (bookId, authorId)
);

CREATE TABLE Report (
  bookId VARCHAR(10),
  FOREIGN KEY(bookId) REFERENCES Book(bookId),
  reviewerId VARCHAR(100),
  FOREIGN KEY(reviewerId) REFERENCES Reviewer(reviewerId),
  rating INT DEFAULT 1,
  reviewDes VARCHAR(500) NOT NULL,
  PRIMARY KEY (bookId, reviewerId)
);


-- insert some authors
INSERT INTO Author VALUES 
('A1', 'John Paul'),('A2', 'Stuart Russel'),
('A3', 'David M. Patel'),('A4', 'John Kellher'),
('A5', 'Laurence Moroney'),('A6', 'Daniel Smith'),
('A7', 'Sophia Brown'),('A8', 'Olivia Taylor'),
('A9', 'David Garcia'),('A10', 'Michael Martinez'),
('A11', 'John Lee'),('A12', 'Emily Lopez'),
('A13', 'Daniel Smith'),('A14', 'Alice Johnson'),
('A15', 'Ethan Martinez'),('A16', 'Isabella Garcia'),
('A17', 'Matthew Davis'),('A18', 'Elizabeth Wilson'),
('A19', 'James Anderson'),('A20', 'Sophia Taylor'),
('A21', 'Alexander Brown');

-- insert some books
INSERT INTO Book VALUES 
('AI1', 'Artificial Intelligence For Dummies', "Every time you use a smart device or some sort of slick technology—be it a smartwatch, smart speaker, security alarm, or even customer service chat box—youre engaging with artificial intelligence (AI). If youre curious about how AI is developed—or question whether AI is real—Artificial Intelligence For Dummies holds the answers youre looking for."),
('AI2', 'Artificial Intelligence: A Modern Approach', "The long-anticipated revision of Artificial Intelligence: A Modern Approach explores the full breadth and depth of the field of artificial intelligence (AI). The 4th Edition brings readers up-to-date on the latest technologies, presents concepts in a more unified manner, and offers new or expanded coverage of machine learning, deep learning, transfer learning, multi agent systems, robotics, natural language processing, causality, probabilistic programming, privacy, fairness, and safe AI."),
('AI3', 'Artificial Intelligence & Generative AI for Beginners', "The long-anticipated revision of Artificial Intelligence: A Modern Approach explores the full breadth and depth of the field of artificial intelligence (AI). The 4th Edition brings readers up-to-date on the latest technologies, presents concepts in a more unified manner, and offers new or expanded coverage of machine learning, deep learning, transfer learning, multi agent systems, robotics, natural language processing, causality, probabilistic programming, privacy, fairness, and safe AI."),
('AI4', 'Deep Learning', "An accessible introduction to the artificial intelligence technology that enables computer vision, speech recognition, machine translation, and driverless cars.Deep learning is an artificial intelligence technology that enables computer vision, speech recognition in mobile phones, machine translation, AI games, driverless cars, and other applications."),
('AI5', 'AI and Machine Learning For Coders', "If you're looking to make a career move from programmer to AI specialist, this is the ideal place to start. Based on Laurence Moroney's extremely successful AI courses, this introductory book provides a hands-on, code-first approach to help you build confidence while you learn key topics."),
('CS1', 'Countdown to Zero Day', "A top cybersecurity journalist tells the story behind the virus that sabotaged Iran's nuclear efforts and shows how its existence has ushered in a new age of warfare—one in which a digital attack can have the same destructive capability as a megaton bomb."),
('CS2', 'Sandworm: A New Era of Cyberwar', "From Wired senior writer Andy Greenberg comes the true story of the desperate hunt to identify and track an elite team of Russian agents bent on digital sabotage."),
('CS3', 'Social Engineering', "The Science of Human Hacking reveals the craftier side of the hackers repertoire—why hack into something when you could just ask for access? Undetectable by firewalls and antivirus software, social engineering relies on human fault to gain access to sensitive spaces; in this book, renowned expert Christopher Hadnagy explains the most commonly-used techniques that fool even the most robust security personnel, and shows you how these techniques have been used in the past."),
('CS4', 'Metasploit: The Penetration Testers Guide', "The Metasploit Framework makes discovering, exploiting, and sharing vulnerabilities quick and relatively painless. But while Metasploit is used by security professionals everywhere, the tool can be hard to grasp for first-time users. Metasploit- The Penetration Tester's Guide fills this gap by teaching you how to harness the Framework and interact with the vibrant community of Metasploit contributors."),
('CC1', 'Cloud Computing: Concepts, Technology & Architecture', "Cloud computing has become an integral and foundational part of information technology. The majority of digital business activity and technology innovation occurs with the involvement of contemporary cloud environments that provide highly sophisticated automated technology infrastructure and a vast range of technology resources."),
('CC2', 'Cloud Computing For Dummies', "Cloud computing is no longer just a clever new toy in the world of IT infrastructure. Despite the nebulous name, its become a real and important part of our information architecture—and tech professionals who ignore it or try to skim their way through risk falling behind rapidly."),
('CC3', 'Cloud Computing Basics', "Regardless of where your organization is in your cloud journey, moving to the cloud is an inevitability in the coming years. The cloud is here to stay, and now is the best time to identify optimal strategies to harness the benefits and mitigate the risks. Cloud Computing Basics is the practical, accessible entry point you have been seeking."),
('CC4', 'AWS Certified Cloud Practitioner Exam Guide', "If you are a seasoned IT professional, this certification will make it easier for you to prepare for more technical certifications to progress up the AWS ladder and improve your career prospects."),
('WT1', 'Angular Projects', "Angular Projects isn't like other books on Angular - this is a project-based guide that helps budding Angular developers get hands-on experience while developing cutting-edge applications."),
('WT2', 'Web Design: The Evolution of the Digital World 1990', "The last three decades have marked an era of technological upheaval as frenetic and groundbreaking as there ever has been. From early desktop computers and mobile phones to virtual reality: the web is now virtually inseparable from all facets of human interaction and daily life."),
('WT3', 'Web Design with HTML & CSS3', "The webpage development process starts with a semantic wireframe and weaves proven principles of responsive design into each chapter. This edition contains a raft of new, fresh projects that logically build in complexity and also probe for understanding."),
('WT4', 'Web3: Charting the Internets Next Economic and Cultural Frontier', "The Web, and with it the Internet, are entering a new age. Weve moved from the “Read-only Web,” which had little functionality for interacting with content, to the “Read-Write Web,” which offered seemingly endless collaborative opportunities, from sharing with our favorite people to shopping at our favorite brands."),
('DS1', 'Data Science for Beginners', "What if there was one simple, clear process for ensuring that all your companys data science projects achieve a high a return on investment? What if you could validate your ideas for future data science projects, and select the one idea thats most prime for achieving profitability."),
('DS2', 'Ace the Data Science Interview', "Authored by two Ex-Facebook employees, Ace the Data Science Interview is the best way to prepare for Data Science, Data Analyst, and Machine Learning interviews, so that you can land your dream job at FAANG, tech startups, or Wall Street."),
('DS3', 'Data Science', "This book will discuss everything that you need to know when it comes to working in the field of data science. This world has changed, and with the modern technology that we have, it is easier than ever for companies to amass a large amount of data on the industry, on their competition, on their products, and their customers."),
('DS4', 'R for Data Science', "You'll learn how to import, transform, and visualize your data and communicate the results. And you'll get a complete, big-picture understanding of the data science cycle and the basic tools you need to manage the details.");

-- insert some reviewers
INSERT INTO Reviewer VALUES
('R1', 'Donald'),('R2', 'Emily'),
('R3', 'Michael'),('R4', 'Jessica'),
('R5', 'William'),('R6', 'Sophia'),
('R7', 'Matthew'),('R8', 'Emma'),
('R9', 'Daniel'),('R10', 'Olivia'),
('R11', 'James'),('R12', 'Ava'),
('R13', 'Jacob'),('R14', 'Isabella'),
('R15', 'Ethan'),('R16', 'Mia'),
('R17', 'Alexander'),('R18', 'Charlotte'),
('R19', 'Benjamin'),('R20', 'Amelia');

-- who wrote which books
INSERT INTO Authorship VALUES 
('AI1','A1'), ('AI2','A2'),
('AI3','A3'), ('AI4','A4'),
('AI5','A5'), ('CS1','A6'),
('CS2','A7'), ('CS3','A8'),
('CS4','A9'), ('CC1','A10'),
('CC2','A11'), ('CC3','A12'),
('CC4','A13'), ('WT1','A14'),
('WT2','A15'), ('WT3','A16'),
('WT4','A17'), ('DS1','A18'),
('DS2','A19'), ('DS3','A20'),
('DS4','A21');

-- insert book report/reviews
INSERT INTO Report (bookId, reviewerId, rating, reviewDes) VALUES
('AI1', 'R1', 4, 'A comprehensive guide to understanding artificial intelligence concepts.'),
('AI1', 'R2', 5, 'Fantastic book! It covers AI in a very easy-to-understand manner.'),
('AI1', 'R3', 3, 'Decent introduction to AI concepts, but lacks depth.'),
('AI2', 'R4', 5, 'A must-read for anyone interested in artificial intelligence.'),
('AI2', 'R5', 4, 'Well-written and informative. Highly recommended.'),
('AI2', 'R6', 4, 'Provides a solid foundation in AI principles.'),
('AI3', 'R7', 4, 'Great beginners guide to artificial intelligence and generative AI.'),
('AI3', 'R8', 3, 'Good overview of AI, but could have more practical examples.'),
('AI3', 'R9', 5, 'Excellent explanations and examples. Easy to follow.'),
('AI4', 'R10', 5, 'In-depth coverage of deep learning techniques.'),
('AI4', 'R11', 4, 'Comprehensive guide for understanding deep learning algorithms.'),
('AI4', 'R12', 4, 'Well-structured and informative.'),
('AI5', 'R13', 5, 'Practical and hands-on approach to learning AI and machine learning.'),
('AI5', 'R14', 4, 'Great resource for programmers diving into AI and ML.'),
('AI5', 'R15', 4, 'Clear explanations and useful coding examples.'),
('CS1', 'R16', 4, 'Fascinating insights into cyber threats and vulnerabilities.'),
('CS1', 'R17', 5, 'Eye-opening read about the world of cyberwarfare.'),
('CS1', 'R18', 3, 'Interesting, but sometimes overly technical.'),
('CS2', 'R19', 5, 'Thorough examination of cyberwarfare tactics and strategies.'),
('CS2', 'R20', 4, 'Well-researched and engaging.'),
('CS2', 'R1', 4, 'Informative and thought-provoking.'),
('CS3', 'R2', 3, 'Useful insights into social engineering techniques.'),
('CS3', 'R3', 4, 'Helpful overview of social engineering tactics.'),
('CS3', 'R4', 3, 'Decent introduction to social engineering.'),
('CS4', 'R5', 5, 'Comprehensive guide to using Metasploit for penetration testing.'),
('CS4', 'R6', 4, 'Well-written and informative.'),
('CS4', 'R7', 4, 'Useful resource for penetration testers.'),
('CC1', 'R8', 4, 'Clear explanations of cloud computing concepts.'),
('CC1', 'R9', 5, 'Excellent resource for understanding cloud architecture.'),
('CC1', 'R10', 4, 'Comprehensive coverage of cloud computing technologies.'),
('CC2', 'R11', 5, 'Highly recommended for beginners in cloud computing.'),
('CC2', 'R12', 4, 'Easy-to-understand guide to cloud computing basics.'),
('CC2', 'R13', 4, 'Informative and practical.'),
('CC3', 'R14', 3, 'Provides a good overview of cloud computing fundamentals.'),
('CC3', 'R15', 4, 'Well-organized and easy to follow.'),
('CC3', 'R16', 3, 'Decent introduction to cloud computing.'),
('CC4', 'R17', 5, 'Comprehensive study guide for the AWS Certified Cloud Practitioner exam.'),
('CC4', 'R18', 4, 'Useful resource for exam preparation.'),
('CC4', 'R19', 4, 'Covers all the topics required for the certification exam.'),
('WT1', 'R20', 5, 'Great projects to practice Angular skills.'),
('WT1', 'R1', 4, 'Useful for learning Angular through hands-on projects.'),
('WT1', 'R2', 4, 'Well-explained projects for Angular developers.'),
('WT2', 'R3', 5, 'Fascinating exploration of the evolution of web design.'),
('WT2', 'R4', 4, 'Informative and visually engaging.'),
('WT2', 'R5', 4, 'Interesting historical perspective on web design.'),
('WT3', 'R6', 5, 'Excellent book for learning HTML and CSS.'),
('WT3', 'R7', 4, 'Clear explanations and useful examples.'),
('WT3', 'R8', 4, 'Helpful resource for beginners in web design.'),
('WT4', 'R9', 5, 'Insightful look into the future of the internet and web technologies.'),
('WT4', 'R10', 4, 'Thought-provoking analysis of emerging web trends.'),
('WT4', 'R11', 4, 'Well-researched and thoughtfully written.'),
('DS1', 'R12', 5, 'Great introduction to data science concepts and techniques.'),
('DS1', 'R13', 4, 'Useful for beginners in data science.'),
('DS1', 'R14', 4, 'Clear explanations and practical examples.'),
('DS2', 'R15', 5, 'Comprehensive guide for acing data science interviews.'),
('DS2', 'R16', 4, 'Helpful resource for preparing for data science interviews.'),
('DS2', 'R17', 4, 'Covers a wide range of topics relevant to data science interviews.'),
('DS3', 'R18', 5, 'Excellent overview of data science principles and methodologies.'),
('DS3', 'R19', 4, 'Informative and well-structured.'),
('DS3', 'R20', 4, 'Good resource for beginners in data science.'),
('DS4', 'R1', 5, 'Comprehensive guide to using R for data analysis.'),
('DS4', 'R2', 4, 'Well-written and informative.'),
('DS4', 'R3', 4, 'Useful for learning R programming for data science.');
