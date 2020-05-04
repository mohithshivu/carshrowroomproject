#include<stdio.h>
#include<GL/glut.h>
#include<string.h>
#include<math.h>
char str[]="R N S INSTITUTE OF TECHNOLOGY";
char str1[]="VISHNUVARDHAN ROAD , CHANNASANDRA , BANGLORE 560078";
char str2[]="COMPUTER GRAPHICS & VISUALIZATION";
char str3[]="MINI PROJECT ON";
char str4[]="EFFECT OF PLASTIC IN SEA";
char str5[]="TEAM MEMBERS :";
char str6[]="KAVYA M K - 1RN17CS043";
char str7[]="MOHITH N  - 1RN17CS054";
char str8[]="DEPT OF CSE,SECTION A";
char str9[]="PROJECT GUIDED BY :";
char str10[]="MAMATHA JAJUR";
char str11[]="ASSISTANT PROFESSOR ";
char str12[]="DEPT OF CSE";
char str13[]="PRESS R/r TO CONTINUE";

char str14[]="PRESS U/u TO CONTINUE";
char str15[]="PRESS t/T TO CONTINUE";
int w=1400,h=900;
int smenu1,smenu2;
int display_order=0;
int  flag=0;
int  mflag=0;
int hmflag=0;
int mship=0;
int mcloud=0;
int dflag=0;
int pflag=0;
int eflag=0;
int cflag=0;
int tflag=0;
int sflag=0;
int r=0,g=1,b=1;
int r1,g1,b1;
int r2=0,g2=0,b2=0;
void moon();
void dolphin();
void nightmode();
void fishhead();



int radius;
void Display();
float xt=1.0,yt=1.0;            // For interactive Keyboard
float x = 1.0,y = 1.0,z=1.0;    // For Movement
float angle =0;  				// For Function animation
float Autorun = 500;
float Autorun1=400;
float current_angle = 0.0f;
float step_angle = 0.6f;
float center_x = 780.0f;
float center_y = 500.0f;			// For Movement Autorun

void key(unsigned char ch,int x,int y);

void drawTurbine() {
    // draw the tower
    
   
    // Rotate object
    //glPushMatrix();

    glTranslatef(center_x, center_y, 0.0f);
    glRotatef(current_angle, 0, 0, 1);
    current_angle += step_angle;
    glTranslatef(-center_x, -center_y, 0.0f);

    // draw first rotor blade
    

    
    // circle in the middle
    //circle();
     float theta;
    
    glBegin(GL_POLYGON);
    glColor3f(1.0, 1.0, 1.0);
    for (int i = 0; i <= 360; i++) {
        theta = i * 3.142 / 180;
        glVertex2f(780 + 40 * cos(theta), 500 + 40 * sin(theta));
    }
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.18, .31, 0.31);
    for (int i = 0; i <= 360; i++) {
        theta = i * 3.142 / 180;
        glVertex2f(780 + 10 * cos(theta), 500 + 10 * sin(theta));
    }
    
    glEnd();
    glBegin(GL_TRIANGLES);
    glColor3f(0.0, 0.0, 0.0);
    glVertex2f(785, 500);
    glVertex2f(775, 500);
    glVertex2f(780,590);
    glEnd();
    // draw second rotor blade
    glBegin(GL_TRIANGLES);
    glColor3f(0.0, 0.0, 0.0);
    glVertex2f(782, 494);
    glVertex2f(788, 500);
    glVertex2f(859, 460);
    glEnd();
    // draw third rotor blade
   glBegin(GL_TRIANGLES);
    glColor3f(0.0, 0.0, 0.0);
    glVertex2f(774, 500);
    glVertex2f(779,494 );
    glVertex2f(700,460 );
    glEnd();
 
    //glPopMatrix();
    glutSwapBuffers();
    

  
    glutPostRedisplay();
     glFlush();
    
}

void display() {
    glClear(GL_COLOR_BUFFER_BIT);
    glMatrixMode(GL_MODELVIEW);

    glLoadIdentity();
    glMatrixMode(GL_PROJECTION);
  
    //drawTurbine();
     glutSwapBuffers();
   

  
    glutPostRedisplay();
    
    
    //glFlush();
    // Rotate object
    
    //glFlush();
   
}
void turbine()
{
  display();
}
void animation(void)
{ if(angle>=0 && angle<10)
		angle = angle+10;
	else angle = 0;
 
}

void Auto(void)
{

	
	if(Autorun<=1000 && Autorun>-900)
		Autorun= Autorun-0.8;
	else Autorun = 1000;
	glutPostRedisplay();
	
	
		if(Autorun1<=1000  )
	     	Autorun1 -= 0.8;
	else Autorun1 = -100;
  
 // drawTurbine();
	glutPostRedisplay();
  glFlush();
}

void Auto1(void)
{
  if(Autorun<=1000 && Autorun>-900)
		Autorun= Autorun-0.8;
	else Autorun = 1000;
	glutPostRedisplay();
	
		if(Autorun1<=1000  )
	     	Autorun1 += 0.8;
	else Autorun1 = -100;
 // drawTurbine();
	glutPostRedisplay();//
}

void text()
{	glColor3f(1,0,0);
	glRasterPos2f(200,380);
		int i;
		for(i=0;i<strlen(str);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str[i]);
		
		}
		glRasterPos2f(130,360);
		for(i=0;i<strlen(str1);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str1[i]);
		}
		glColor3f(0,0,1);
		glRasterPos2f(180,340);
		for(i=0;i<strlen(str2);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str2[i]);
		}glColor3f(.11,.64,0.22);
		glRasterPos2f(270,320);
		for(i=0;i<strlen(str3);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str3[i]);
		}

		
		glRasterPos2f(240,300);
		for(i=0;i<strlen(str4);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str4[i]);
		}

		glColor3f(.22,0.02,.45);
		glRasterPos2f(20,200);
		for(i=0;i<strlen(str5);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str5[i]);
		}glColor3f(.30,.73,0.09);
		glRasterPos2f(20,160);
		for(i=0;i<strlen(str6);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str6[i]);
		}
        glColor3f(.30,.74,0.2);
		glRasterPos2f(20,140);
		for(i=0;i<strlen(str7);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str7[i]);
		}
		glColor3f(1,.01,.05);
		glRasterPos2f(20,120);
		
		for(i=0;i<strlen(str8);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str8[i]);
		}
		glColor3f(.22,0.02,.45);
		glRasterPos2f(490,200);
		for(i=0;i<strlen(str9);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str9[i]);
		}glColor3f(.30,.73,0.09);
		glRasterPos2f(490,160);
		for(i=0;i<strlen(str10);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str10[i]);
		}
        glColor3f(.30,.74,0.2);
		glRasterPos2f(490,140);
		for(i=0;i<strlen(str11);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str11[i]);
		}glColor3f(1,.01,.05);
		glRasterPos2f(490,120);
		for(i=0;i<strlen(str12);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str12[i]);
		}
        glColor3f(.6,0,.8);
		glRasterPos2f(250,20);
		for(i=0;i<strlen(str13);i++)
	{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,str13[i]);
		}
       glutSwapBuffers();
}
void my_reshape(int w, int h)
{
   GLdouble size;
   GLdouble aspect;

   // Use the whole window. 
   glViewport(0, 0, w, h);

   // We are going to do some 2-D orthographic drawing. 
   glMatrixMode(GL_PROJECTION);
   glLoadIdentity();
   size = (GLdouble)((w >= h) ? w : h) ;
   if (w <= h) {
      aspect = (GLdouble)h/(GLdouble)w;
      gluOrtho2D(0, w, 0, h);
   }
   else {
      aspect = (GLdouble)w/(GLdouble)h;
      gluOrtho2D(0, w, 0, h);
   }

   /* Make the world and window coordinates coincide so that 1.0 in */
   // model space equals one pixel in window space.                 
   glScaled(aspect, aspect, 1.0);

   // Now determine where to draw things. 
   glMatrixMode(GL_MODELVIEW);
   glLoadIdentity();

}

void init() {
	glClearColor(0, 0.0, .0, 0.0);
	glColor3f(0.0f, 0.0f, 0.0f);
	//glPointSize(1.0f);
	
    //glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    glMatrixMode(GL_MODELVIEW);
    gluOrtho2D(0.0f, 2000.0f, 0.0f, 2000.0f);
}
void nemo()
{
    
	
	glClearColor(0,1,1,1);
	 
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
	gluOrtho2D(0.0,1000.0,0.0,1000.0);
    glClear(GL_COLOR_BUFFER_BIT);	
	glColor3f(0,1,0);
	glBegin(GL_TRIANGLES);
	glVertex2f(100,00);
	glVertex2f(70,100);
	glVertex2f(150,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(150,00);
	glVertex2f(175,100);
	glVertex2f(200,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(200,0);
	glVertex2f(260,100);
	glVertex2f(240,0);
    glEnd();

		glBegin(GL_TRIANGLES);
	glVertex2f(400,00);
	glVertex2f(370,100);
	glVertex2f(450,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(450,00);
	glVertex2f(475,100);
	glVertex2f(500,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(500,0);
	glVertex2f(560,100);
	glVertex2f(540,0);
    glEnd();

		glBegin(GL_TRIANGLES);
	glVertex2f(700,00);
	glVertex2f(670,100);
	glVertex2f(750,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(750,00);
	glVertex2f(775,100);
	glVertex2f(800,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(800,0);
	glVertex2f(860,100);
	glVertex2f(840,0);
    glEnd();
	glPushMatrix();
	glPushMatrix();
	
	glRotatef(angle,0.0,0.0,0.0); 
	glTranslatef(Autorun,0.0,0.0); 
	glTranslatef(xt,yt,0.0);			//For Move    NEWS/QDZC  each Position.


	
	glPushMatrix();
    
	glBegin(GL_TRIANGLES);
    
glColor3f(1, 0.5, 0);
glVertex2f(300,420);
glVertex2f(600,300);
glVertex2f(300,180);
glEnd();

glLineWidth(5);
glBegin(GL_LINES);
glColor3f(0,0,0);
glVertex2f(330, 190);
glVertex2f(330, 410);
glVertex2f(360, 400);
glVertex2f(360, 200);
glVertex2f(400, 220);
glVertex2f(400, 380);
glVertex2f(430, 370);
glVertex2f(430, 232);
glVertex2f(470, 250);
glVertex2f(470, 350);
glVertex2f(500, 340);
glVertex2f(500, 260);
glEnd();

glBegin(GL_POLYGON);
glColor3f(1, 1, 1); 
glVertex2f(330, 190);
glVertex2f(330, 410);
glVertex2f(360, 400);
glVertex2f(360, 200);
glVertex2f(330, 190);
glEnd();

glBegin(GL_POLYGON);
glColor3f(1, 1, 1); 
glVertex2f(400, 220);
glVertex2f(400, 380);
glVertex2f(430, 370);
glVertex2f(430, 232);
glVertex2f(400, 220);
glEnd();

glBegin(GL_POLYGON);
glColor3f(1, 1, 1); 
glVertex2f(470, 250);
glVertex2f(470, 350);
glVertex2f(500, 340);
glVertex2f(500, 260);
glVertex2f(470, 240);
glEnd();

glBegin(GL_POLYGON);
glColor3f(1, 1, 1); 
glVertex2f(470, 250);
glVertex2f(470, 350);
glVertex2f(500, 340);
glVertex2f(500, 260);
glVertex2f(470, 240);
glEnd();

glBegin(GL_TRIANGLES);
glColor3f(0, 0, 0); 
glVertex2f(500, 340);
glVertex2f(410, 450);
glVertex2f(390, 385);

glEnd();

glBegin(GL_POLYGON);
glColor3f(1, 0.5, 0.0);
glVertex2f(600, 300);
glVertex2f(700, 400);
glVertex2f(700, 350);
glVertex2f(600, 300);
glEnd();
glBegin(GL_POLYGON);
glColor3f(1, 0.5, 0);
glVertex2f(600, 300);
glVertex2f(700, 200);
glVertex2f(700, 250);
glVertex2f(600, 300);
glEnd();
fishhead();
glColor3f(1,1,1);
     glBegin(GL_POLYGON);
   glVertex2d(130,150);
   glVertex2d(150,20);
   glVertex2d(250,10);
   glVertex2d(250,170);
   glVertex2d(130,150);
   glEnd();   
   glLineWidth(3);
   glBegin(GL_LINES);
   glVertex2f(250,10);
   glVertex2f(290,10);
   glVertex2f(290,10);
   glVertex2f(300,40);
    glVertex2f(300,40);
     glVertex2f(250,50);

     glVertex2f(250,170);
   glVertex2f(290,180);
   glVertex2f(290,180);
   glVertex2f(300,150);
    glVertex2f(300,150);
     glVertex2f(250,140);
   glEnd();

/*glBegin(GL_POLYGON);
glColor3f(1, 0.38, 0.01);
glVertex2f(400, 430);
glVertex2f(500, 400);
glVertex2f(525, 350);
glVertex2f(400, 430);
glEnd();


glBegin(GL_POLYGON);
glColor3f(1, 0.38, 0.01);
glVertex2f(400, 200);
glVertex2f(500, 200);
glVertex2f(525, 260);
glVertex2f(400, 200);
glEnd();*/
///2nd fish

	//flag=0;
	
	
	
	glPopMatrix();
	glPopMatrix();
		glPopMatrix();
	glutSwapBuffers();

		
	
	glEnd();
	//glFlush();
    

}
void plastic()
{
   glColor3f(1,1,1);
 //  glRecti(800,400,780,420);
 glShadeModel(GL_FLAT);
   glBegin(GL_POLYGON);
   glVertex2f(800,400);
    glVertex2f(820,420);
    glVertex2f(800,460);
     glVertex2f(780,440);
      glVertex2f(800,400);
      glEnd();
      glColor3f(1,1,1);
      glBegin(GL_TRIANGLES);
      glVertex2f(800,460);
      
     glVertex2f(780,440);
glVertex2f(775,470);
      glEnd();
      glBegin(GL_POLYGON);
   glVertex2f(300,500);
    glVertex2f(320,520);
    glVertex2f(300,560);
     glVertex2f(280,540);
      glVertex2f(300,500);
      glEnd();
      glColor3f(1,1,1);
      glBegin(GL_TRIANGLES);
      glVertex2f(300,560);
      
     glVertex2f(280,540);
glVertex2f(275,570);
      glEnd();
      glBegin(GL_POLYGON);
   glVertex2f(100,400);
    glVertex2f(120,420);
    glVertex2f(100,460);
     glVertex2f(80,440);
      glVertex2f(100,400);
      glEnd();
      glColor3f(1,1,1);
      glBegin(GL_TRIANGLES);
      glVertex2f(100,460);
      
     glVertex2f(80,440);
glVertex2f(75,470);
      glEnd();
      glBegin(GL_POLYGON);
   glVertex2f(900,400);
    glVertex2f(920,420);
    glVertex2f(900,460);
     glVertex2f(880,440);
      glVertex2f(900,400);
      glEnd();
      glColor3f(1,1,1);
      glBegin(GL_TRIANGLES);
      glVertex2f(900,460);
      glVertex2f(875,470);
     glVertex2f(880,440);

      glEnd();
       glBegin(GL_POLYGON);
   glVertex2f(100,100);
    glVertex2f(120,120);
    glVertex2f(100,160);
     glVertex2f(80,140);
      glVertex2f(100,100);
      glEnd();
      glColor3f(1,1,1);
      glBegin(GL_TRIANGLES);
      glVertex2f(100,160);
      
     glVertex2f(80,140);
glVertex2f(75,170);
      glEnd();
      glBegin(GL_POLYGON);
      glVertex2f(200,200);
      glVertex2f(180,220);
      glVertex2f(220,240);
      glVertex2f(240,220);
      glVertex2f(200,200);
      glEnd();
       glBegin(GL_TRIANGLES);
      glVertex2f(220,240);
      glVertex2f(260,250);
     glVertex2f(240,220);

glEnd();
 glBegin(GL_POLYGON);
      glVertex2f(800,100);
      glVertex2f(780,120);
      glVertex2f(820,140);
      glVertex2f(840,120);
      glVertex2f(800,100);
      glEnd();
       glBegin(GL_TRIANGLES);
      glVertex2f(820,140);
      glVertex2f(860,150);
     glVertex2f(840,120);

glEnd();
glBegin(GL_POLYGON);
      glVertex2f(100,500);
      glVertex2f(80,520);
      glVertex2f(120,540);
      glVertex2f(140,520);
      glVertex2f(100,500);
      glEnd();
       glBegin(GL_TRIANGLES);
      glVertex2f(120,540);
      glVertex2f(160,550);
     glVertex2f(140,520);

glEnd();
glBegin(GL_POLYGON);
      glVertex2f(900,500);
      glVertex2f(880,520);
      glVertex2f(920,540);
      glVertex2f(940,520);
      glVertex2f(900,500);
      glEnd();
       glBegin(GL_TRIANGLES);
      glVertex2f(920,540);
      glVertex2f(960,550);
     glVertex2f(940,520);

glEnd();
     
      

    glColor3f(0,0,0);
    glPointSize(10);

   glBegin(GL_POINTS);
    glVertex2f(775,470);
    glVertex2f(275,570);
    glVertex2f(75,170);
    glVertex2f(260,250);
   glVertex2f(860,150);
   glVertex2f(160,550);
   glVertex2f(960,550);
 glVertex2f(75,470);
 glVertex2f(875,470);
     /* glBegin(GL_POLYGON);
      glVertex2f(775,470);
    glVertex2f(760,480);
    glVertex2f(770,490);
     glVertex2f(760,470);
      glVertex2f(770,470);*/

   glEnd();
    glColor3f(1,1,1);
    glBegin(GL_POLYGON);
      glVertex2f(300,300);//cover
      glVertex2f(250,280);
      glVertex2f(200,350);
      glVertex2f(250,370);
      glVertex2f(300,300);
      glEnd();
       glBegin(GL_POLYGON);
      glVertex2f(600,200);//cover
      glVertex2f(550,180);
      glVertex2f(500,250);
      glVertex2f(550,270);
      glVertex2f(600,200);
      glEnd();
      glBegin(GL_POLYGON);
      glVertex2f(900,300);//cover
      glVertex2f(850,280);
      glVertex2f(800,350);
      glVertex2f(850,370);
      glVertex2f(900,300);
      glEnd();
      glBegin(GL_POLYGON);
      glVertex2f(400,100);//cover
      glVertex2f(350,80);
      glVertex2f(300,150);
      glVertex2f(350,170);
      glVertex2f(400,100);
      glEnd();
      
   glLineWidth(3);
   glBegin(GL_LINES);
   glVertex2f(200,350);
   glVertex2f(190,370);
   glVertex2f(190,370);
   glVertex2f(200,380);
   glVertex2f(200,380);
   glVertex2f(215,356);

   glVertex2f(250,370);
   glVertex2f(240,390);
   glVertex2f(240,390);
   glVertex2f(230,380);
   glVertex2f(230,380);
   glVertex2f(235,366);

   glVertex2f(500,250);
   glVertex2f(490,270);
   glVertex2f(490,270);
   glVertex2f(500,280);
   glVertex2f(500,280);
   glVertex2f(515,256);

   glVertex2f(550,270);
   glVertex2f(540,290);
   glVertex2f(540,290);
   glVertex2f(530,280);
   glVertex2f(530,280);
   glVertex2f(535,266);

   glVertex2f(800,350);
   glVertex2f(790,370);
   glVertex2f(790,370);
   glVertex2f(800,380);
   glVertex2f(800,380);
   glVertex2f(815,356);

   glVertex2f(850,370);
   glVertex2f(840,390);
   glVertex2f(840,390);
   glVertex2f(830,380);
   glVertex2f(830,380);
   glVertex2f(835,366);

   glVertex2f(300,150);
   glVertex2f(290,170);
   glVertex2f(290,170);
   glVertex2f(300,180);
   glVertex2f(300,180);
   glVertex2f(315,156);

   glVertex2f(350,170);
   glVertex2f(340,190);
   glVertex2f(340,190);
   glVertex2f(330,180);
   glVertex2f(330,180);
   glVertex2f(335,166);
   glEnd();

   
}
void mainmenu(int key)
{
   switch(key)
  {
      case 1:Autorun = 50;	
               mship=1;
               break;
      case 3: Autorun = 800;
              dflag=1;
               break;
      case 2:mship=0;
               break;
      
   }
    glutPostRedisplay();
}
void stars()
{
   glColor3f(1,1,1);
   glBegin(GL_POLYGON);
   glVertex2f(700,900);//1star
   glVertex2f(710,900);
   glVertex2f(710,890);
   glVertex2f(700,890);
   glVertex2f(700,900);
   glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(700,900);//1star
   glVertex2f(710,900);
   glVertex2f(705,915);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(710,900);//1star
   glVertex2f(710,890);
   glVertex2f(720,895);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(710,890);//1star
   glVertex2f(700,890);
   glVertex2f(705,875);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(700,900);//1star
   glVertex2f(700,890);
   glVertex2f(690,895);
    glEnd();
    glBegin(GL_POLYGON);
   glVertex2f(800,950);//1star
   glVertex2f(810,950);
   glVertex2f(810,940);
   glVertex2f(800,940);
   glVertex2f(800,950);
   glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(800,950);//1star
   glVertex2f(810,950);
   glVertex2f(805,965);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(810,950);//1star
   glVertex2f(810,940);
   glVertex2f(820,945);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(810,940);//1star
   glVertex2f(800,940);
   glVertex2f(805,925);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(800,950);//1star
   glVertex2f(800,940);
   glVertex2f(790,945);
    glEnd();
     glBegin(GL_POLYGON);
   glVertex2f(900,850);//1star
   glVertex2f(910,850);
   glVertex2f(910,840);
   glVertex2f(900,840);
   glVertex2f(900,850);
   glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(900,850);//1star
   glVertex2f(910,850);
   glVertex2f(905,865);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(910,850);//1star
   glVertex2f(910,840);
   glVertex2f(920,845);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(910,840);//1star
   glVertex2f(900,840);
   glVertex2f(905,825);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(900,850);//1star
   glVertex2f(900,840);
   glVertex2f(890,845);
    glEnd();
    glBegin(GL_POLYGON);
   glVertex2f(50,800);//1star
   glVertex2f(60,800);
   glVertex2f(60,790);
   glVertex2f(50,790);
   glVertex2f(50,800);
   glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(50,800);//1star
   glVertex2f(60,800);
   glVertex2f(55,815);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(60,800);//1star
   glVertex2f(60,790);
   glVertex2f(70,795);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(60,790);//1star
   glVertex2f(50,790);
   glVertex2f(55,775);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(50,800);//1star
   glVertex2f(50,790);
   glVertex2f(40,795);
    glEnd();
        glBegin(GL_POLYGON);
   glVertex2f(800,950);//1star
   glVertex2f(810,950);
   glVertex2f(810,940);
   glVertex2f(800,940);
   glVertex2f(800,950);
   glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(800,950);//1star
   glVertex2f(810,950);
   glVertex2f(805,965);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(810,950);//1star
   glVertex2f(810,940);
   glVertex2f(820,945);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(810,940);//1star
   glVertex2f(800,940);
   glVertex2f(805,925);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(800,950);//1star
   glVertex2f(800,940);
   glVertex2f(790,945);
    glEnd();
     glBegin(GL_POLYGON);
   glVertex2f(350,950);//1star
   glVertex2f(360,950);
   glVertex2f(360,940);
   glVertex2f(350,940);
   glVertex2f(350,950);
   glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(350,950);//1star
   glVertex2f(360,950);
   glVertex2f(355,965);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(360,950);//1star
   glVertex2f(360,940);
   glVertex2f(370,945);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(360,940);//1star
   glVertex2f(350,940);
   glVertex2f(355,925);
    glEnd();
    glBegin(GL_TRIANGLES);
    glVertex2f(350,950);//1star
   glVertex2f(350,940);
   glVertex2f(340,945);
    glEnd();
   //glFlush();

}
void night(int key)
{ 
    
    nightmode();
    flag=1;
   switch(key)
   {
      case 1:
            hmflag=0;
            r1=1;g1=1;b1=1;
              moon();
               break;
      case 2:hmflag=1;
               r1=1;g1=1;b1=1;
               moon();
                
               break;
      case 3:hmflag=0;
               r1=0;g1=0;b1=0;
               moon();
            
               break;
      
   }
   glutPostRedisplay();
}
void nightmode()
{
   r=0.18,g=0.18,b=0.31;
   
  
  
    glColor3f(r,g,b);
     glBegin(GL_POLYGON);
        glVertex2f(0,650);
        glVertex2f(1000,650);
        glVertex2f(1000,1000);
        glVertex2f(0,1000);
        glEnd();
        //glFlush();
       // glutPostRedisplay();
        

}
void moon()
{
   float x1,y1,x2,y2; 
  
   
    
   			//For Move    NEWS/QDZC  each Position
        x1 = 200,y1=900,radius=60;
     glColor3f(r1,g1,b1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<8.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        if(hmflag==1)
        {
            x1 = 230,y1=930,radius=60;
     glColor3f(r2,g2,b2);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<8.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        }
        //glFlush();
}
void sun()
{
   float x1,y1,x2,y2;
   x1 = 200,y1=900,radius=60;
     glColor3f(1,.47,0.13);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<8.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
}
void day(int ch)
{
  
   switch(ch)
   {
      case 1:flag=0;

              r=0;g=1;b=1;
            break;
      case 2 :Autorun = 200;	
      
            mcloud=1;
            break;
      case 3:mcloud=0;
            
			   break;
   }
   glutPostRedisplay();
}


void ship()
{
  


   glColor3f(1,1,1);
       glBegin(GL_POLYGON);
       glVertex2f(400,350);
       glVertex2f(380,660);
       glVertex2f(620,660);
       glVertex2f(600,350);
      glVertex2f(400,350);
       glEnd();
       glColor3f(0.02,.72,.8);
       glBegin(GL_POLYGON);
       glVertex2f(600,350);
       glVertex2f(780,500);
       glVertex2f(810,660);
       glVertex2f(620,660);
      glVertex2f(600,350);
       glEnd();
         glColor3f(0.04,.71,1);
       glBegin(GL_POLYGON);
       glVertex2f(396,400);
       glVertex2f(392,460);//
       glVertex2f(608,460);//
       glVertex2f(604,400);
      glVertex2f(390,400);
       glEnd();
        glColor3f(0.04,.71,1);
       glBegin(GL_POLYGON);
       glVertex2f(390,505);//red strip
       glVertex2f(386,565);//
       glVertex2f(615,565);//
       glVertex2f(610,505);
      glVertex2f(390,505);
       glEnd();
         glColor3f(0.04,.71,1);
       glBegin(GL_POLYGON);
       glVertex2f(383,605);
       glVertex2f(380,660);//
       glVertex2f(621,660);//
       glVertex2f(617,605);
      glVertex2f(390,605);
       glEnd();
        glColor3f(.18,.22,1);
       glBegin(GL_POLYGON);
      
       //
       glVertex2f(621,660);
       glVertex2f(617,605);//
       glVertex2f(810,660);
       glVertex2f(820,700);
      glVertex2f(621,660);
       glEnd();
  glColor3f(.18,.22,1);
       glBegin(GL_POLYGON);
       ;//
       glVertex2f(615,565);//
       glVertex2f(610,505);
       glVertex2f(792,565);
       glVertex2f(803,615);
       glVertex2f(615,565);

      
       glEnd();
       glColor3f(.18,.22,1);
       glBegin(GL_POLYGON);
      
       glVertex2f(608,460);//
      glVertex2f(604,400);//
       glVertex2f(782,510);
      glVertex2f(787,540);
       glVertex2f(608,460);
       glEnd();
       glColor3f(0.11,.49,.95);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       glVertex2f(380,660);
       glVertex2f(380,690);
       glVertex2f(620,690);
       glVertex2f(620,660);
       glVertex2f(390,660);
       glEnd();
       
       glColor3f(0,.61,8);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
       glVertex2f(620,690);
       glVertex2f(620,660);
       glVertex2f(770,688);
       glVertex2f(770,715);
       glVertex2f(620,690);
       glEnd();
glColor3f(.2,.2,8);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
       glVertex2f(620,720);//2 step r
       glVertex2f(620,690);
       glVertex2f(770,713);
       glVertex2f(765,734);
       glVertex2f(620,720);
       glEnd();
glColor3f(0,.61,8);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
      
           //steps 3 r
       glVertex2f(620,760);
       glVertex2f(620,720);
       glVertex2f(764,734);
       glVertex2f(764,760);
       glVertex2f(620,760);
       glEnd();
       glColor3f(0,.7,0.93);
       glBegin(GL_POLYGON);//yellow strip
                           //steps 3 r
       glVertex2f(605,790);
       glVertex2f(605,820);
       glVertex2f(730,820);
       glVertex2f(730,790);
       glVertex2f(620,790);
       glEnd();
       
       
     glColor3f(0,0.6,0.8);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
      glVertex2f(400,690);
       glVertex2f(420,720);
       glVertex2f(620,720);//step 1
       glVertex2f(620,690);
       glVertex2f(400,690);
       glEnd();
       glColor3f(1,1,1);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
      
       glVertex2f(420,720);
       glVertex2f(435,760);//steps 2 l
       glVertex2f(620,760);
       glVertex2f(620,720);
       glVertex2f(420,720);
       glEnd();
       glColor3f(0,0.53,0.55);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
      
       glVertex2f(445,760);
       glVertex2f(455,790);//steps 3 l
       glVertex2f(600,790);
       glVertex2f(600,760);
       glVertex2f(420,760);
       glEnd();
       glColor3f(.18,0.22,1);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
      
       glVertex2f(440,790);//extenteded
       glVertex2f(430,820);//steps 4l
       glVertex2f(605,820);
       glVertex2f(605,790);
       glVertex2f(420,790);
       glEnd();
       glColor3f(1,1,1);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
      
       //steps 3 l
       glVertex2f(500,820);
       glVertex2f(520,850);//top
       glVertex2f(580,850);
       glVertex2f(570,820);
       glVertex2f(500,820);
       glEnd();
       glColor3f(0,0,1);
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
      
       //steps 3 l
       //top
       glVertex2f(580,850);
       glVertex2f(570,820);
       glVertex2f(620,820);
       glVertex2f(610,850);
       glVertex2f(580,850);
       glEnd();
       glBegin(GL_POLYGON);//yellow strip
      
       //
       
      
       //steps 3 l
       //top
       
       glEnd();
     glColor3f(.18,0.22,1);
        glBegin(GL_POLYGON);//yellow strip
      
       //
       
      
       //steps 3 l
       glVertex2f(600,790);
       glVertex2f(600,760);
       glVertex2f(750,760);
       glVertex2f(750,790);
       glVertex2f(600,790);
       glEnd();
       glColor3f(0,0,01);
       glBegin(GL_POLYGON);
glVertex2f(550,850);
       glVertex2f(540,900);//top
       glVertex2f(560,900);
       glVertex2f(580,850);
       glVertex2f(550,850);
      glEnd();
      glColor3f(1,1,01);
       glBegin(GL_POLYGON);

       glVertex2f(560,900);
       glVertex2f(580,850);
       glVertex2f(595,850);
       glVertex2f(580,900);
       glVertex2f(560,900);
      glEnd();
      glColor3f(0,1,0.5);
      glRecti(500,900,620,930);
    if(sflag==1)
    {
       glColor3f(.21,.35,.42);
       glBegin(GL_POLYGON);
    glVertex2f(600,350);
    glVertex2f(750,360);
    glVertex2f(900,530);
    glVertex2f(780,498);
    glVertex2f(600,350);
    glEnd();
     glColor3f(.21,.35,.42);
       glBegin(GL_POLYGON);
  
    glVertex2f(750,360);
    glVertex2f(856,480);
    glVertex2f(880,480);
    glVertex2f(780,360);
    
    glEnd();
   glColor3f(.21,.35,.42);
       glBegin(GL_POLYGON);
  
    glVertex2f(780,360);
    glVertex2f(862,460);
    glVertex2f(890,460);
    glVertex2f(810,360);
    
    glEnd();
   glColor3f(.21,.35,.42);
       glBegin(GL_POLYGON);
  
    glVertex2f(810,360);
    glVertex2f(873,440);
    glVertex2f(890,440);
    glVertex2f(830,360);
    
    glEnd();
  glColor3f(.21,.35,.42);
       glBegin(GL_POLYGON);
  
    glVertex2f(844,380);
    glVertex2f(858,400);
    glVertex2f(890,370);
    glVertex2f(880,350);
    
    glEnd();
   glColor3f(.21,.35,.42);
       glBegin(GL_POLYGON);
  
    
    glVertex2f(905,410);
    glVertex2f(925,410);
    glVertex2f(890,320);
    glVertex2f(868,330);
  
    
    glEnd();
}
      if(tflag==1){
      glTranslatef(center_x, center_y, 0.0f);
    glRotatef(current_angle, 0, 0, 1);
    current_angle += step_angle;
    glTranslatef(-center_x, -center_y, 0.0f);
      }
 float theta;
  //turbine
 glBegin(GL_POLYGON);
    glColor3f(1.0, 1.0, 1.0);
    for (int i = 0; i <= 360; i++) {
        theta = i * 3.142 / 180;
        glVertex2f(780 + 40 * cos(theta), 500 + 40 * sin(theta));
    }
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.18, .31, 0.31);
    for (int i = 0; i <= 360; i++) {
        theta = i * 3.142 / 180;
        glVertex2f(780 + 10 * cos(theta), 500 + 10 * sin(theta));
    }
    
    glEnd();
    glBegin(GL_TRIANGLES);
    glColor3f(0.0, 0.0, 0.0);
    glVertex2f(785, 500);
    glVertex2f(775, 500);
    glVertex2f(780,590);
    glEnd();
    // draw second rotor blade
    glBegin(GL_TRIANGLES);
    glColor3f(0.0, 0.0, 0.0);
    glVertex2f(782, 494);
    glVertex2f(788, 500);
    glVertex2f(859, 460);
    glEnd();
    // draw third rotor blade
   glBegin(GL_TRIANGLES);
    glColor3f(0.0, 0.0, 0.0);
    glVertex2f(774, 500);
    glVertex2f(779,494 );
    glVertex2f(700,460 );
    glEnd();
   
   
     glFlush();
}
void cloud()
{
    float x1,y1,x2,y2; 
   			//For Move    NEWS/QDZC  each Position.


	
         
         x1 = 90,y1=810,radius=30;
     glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
         x1 = 130,y1=820,radius=40;
     glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        x1 = 160,y1=800,radius=30;
     glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
           x1 = 100,y1=830,radius=100;
        glColor3f(1,1,1);
         x1 = 380,y1=950,radius=40;
     glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
         x1 = 350,y1=920,radius=30;
        glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        x1 = 430,y1=930,radius=35;
        glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
            x1 = 850,y1=940,radius=45;
        glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
         x1 = 800,y1=920,radius=35;
        glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
x1 = 890,y1=930,radius=45;
        glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        x1 = 940,y1=930,radius=30;
        glColor3f(1,1,1);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();

        
    /* glBegin(GL_TRIANGLE_FAN);//curve ***
        for (angle=2.0f;angle<4.3f;angle+=0.3) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();*/
        
        glBegin(GL_POLYGON);
        glVertex2f(120,830);
        glVertex2f(20,770);
        glVertex2f(225,770);
        glVertex2f(120,830);
        glEnd();
        glColor3f(1,1,1);
         glBegin(GL_POLYGON);
        glVertex2f(380,940);
        glVertex2f(280,890);
        glVertex2f(510,890);
        glVertex2f(380,940);
        glEnd();
        glColor3f(1,1,1);
        /* glBegin(GL_POLYGON);
        glVertex2f(880,940);
        glVertex2f(960,910);
        glVertex2f(870,910);
        glVertex2f(880,940);
        glEnd();
         glBegin(GL_POLYGON);
        glVertex2f(790,940);
        glVertex2f(710,910);
        glVertex2f(780,910);
        glVertex2f(790,940);
        glEnd();*/

	
	
     
        //glFlush();
}
void dolphin()
{
    glColor3f(0,0.28,0.98);
    glBegin(GL_POLYGON);
    glVertex2d(100,100);
    glVertex2d(108,95);
    glVertex2d(150,115);
    glVertex2d(105,110);
    glVertex2d(100,100);
    glEnd();

       glColor3f(0.0,0.28,0.98);
    glBegin(GL_POLYGON);
    glVertex2d(105,110);
    glVertex2d(150,115);
    glVertex2d(170,135);
    glVertex2d(120,130);
      
    glVertex2d(105,110);
    glEnd();
    glColor3f(0.0,0.28,0.98);
    glBegin(GL_POLYGON);
    glVertex2d(108,95);
    glVertex2d(150,115);
    glVertex2d(171,136);
    glVertex2d(155,115);
    glVertex2d(130,100);
    glVertex2d(108,95);
    glEnd();
    glShadeModel(GL_FLAT);
    glBegin(GL_TRIANGLE_STRIP);

    glVertex2d(120,130);
    glVertex2d(170,135);
    glVertex2d(160,150);
    glColor3f(0,0.28,.98);
    glVertex2d(180,155);
    
    glEnd();

    glColor3f(0.0,0.28,.98);
    glBegin(GL_TRIANGLE_STRIP);

    glVertex2d(120,130);
    glVertex2d(160,150);
    glVertex2d(130,160);
    glColor3f(0.0,0.28,.98);
    glVertex2d(140,180);
    glVertex2d(160,150);
    glColor3f(0.,0.28,.98);
    glVertex2d(160,195);
      
    glEnd();

    glColor3f(0.0,0.28,.99);
    glBegin(GL_POLYGON);
    glVertex2d(160,195);
    glVertex2d(180,155);
    glVertex2d(170,160);
    glVertex2d(160,150);
    glVertex2d(160,195);
    glEnd();

    glColor3f(0.0,0.28,.99);
    glBegin(GL_TRIANGLE_STRIP);

    glVertex2d(160,195);
    glVertex2d(180,155);
    glVertex2d(210,220);
    glColor3f(0.0,0.28,.98);
    glVertex2d(240,185);
    glVertex2d(210,220);
    glColor3f(0.0,0.28,.98);
    glVertex2d(260,230);
    glVertex2d(240,185);
    glColor3f(0.0,0.28,.98);
    glVertex2d(290,195);
    glVertex2d(260,230);
    glColor3f(0.,.28,0.98);
    glVertex2d(310,230);
    glVertex2d(260,230);
    glVertex2d(290,230);
    glEnd();
         
    glBegin(GL_TRIANGLE_STRIP);
    glColor3f(0,.28,.98);
    glVertex2d(310,230);
    glVertex2d(290,195);
    glVertex2d(335,190);
    glColor3f(0,.28,.98);
    glVertex2d(310,180);
    glVertex2d(290,195);
    glColor3f(0.,.28,0.98);
    glVertex2d(287,170);
    glVertex2d(290,195);
   glColor3f(0.0,.28,0.98);
   glVertex2d(240,185);//
   glVertex2d(287,170);
   glColor3f(0.0,.28,0.98);
   glVertex2d(180,135);
      glEnd();   

      glBegin(GL_TRIANGLE_STRIP);
       glColor3f(0,.28,.98);
      glVertex2d(330,250);
      glVertex2d(375,280);
      glVertex2d(375,240);//
    
      glEnd();
      glBegin(GL_POLYGON);
        glColor3f(0,.28,.98);
        glVertex2d(375,240);
        glVertex2d(378,230);
        glVertex2d(335,190);
        glVertex2d(330,250);
        glVertex2d(375,240);
        glColor3f(0.,.28,0.98);   
         glVertex2d(375,280);
         glVertex2d(400,265);
         glVertex2d(379,230);
         glVertex2d(375,240);
         glEnd();

      glBegin(GL_POLYGON);
      glColor3f(0.,.28,.98);  
      glVertex2d(375,280);
      glVertex2d(400,265);
      glVertex2d(410,290);
      glVertex2d(375,280);
      glEnd();

      glBegin(GL_POLYGON);
      glColor3f(0.,0.28,.98);
      glVertex2d(420,275);
      glVertex2d(420,288);
//glVertex2d(420,245);
      glVertex2d(410,290);
      glVertex2d(400,265);
        glEnd();

      glBegin(GL_TRIANGLE_STRIP);
          glColor3f(0,.28,.98);
          glVertex2d(335,190);
          glVertex2d(310,230);
          glColor3f(0,.28,.98);
          glVertex2d(330,250);

        glVertex2d(335,190);
  glVertex2d(310,230);
           glVertex2d(340,230);
          //glColor3f(0.09,0.45,.80);
            glColor3f(0,.28,.98);
          glVertex2d(335,190);
           glVertex2d(377,230);
          glEnd();
      glBegin(GL_POLYGON);
    //glVertex2d(108,95);
    glVertex2d(155,115);
     // glVertex2d(155,115);
      glVertex2d(171,136);
    glVertex2d(180,120);
      glVertex2d(155,115);

    glEnd();
    glColor3f(0.0,.28,.98);
   glBegin(GL_TRIANGLE_STRIP);

      glVertex2d(240,185);
      glVertex2d(180,155);
      glVertex2d(240,155);
      glColor3f(0.0,0.28,0.98);
      glVertex2d(170,136);
      glVertex2d(240,155);
        
      glColor3f(0.0,.28,.98);
      glVertex2d(237,132);
      glVertex2d(170,136);
      glColor3f(0.0,0.28,.98);
            glVertex2d(180,120);
            glColor3f(0.0,0.28,0.98);
            glEnd();
             glBegin(GL_TRIANGLE_STRIP);

            glVertex2d(240,155);
            glVertex2d(237,132);
            glVertex2d(290,140);

                glEnd();
             glBegin(GL_POLYGON);
             glColor3f(0.0,0.28,0.98);
             glVertex2d(240,155);
             glVertex2d(280,170);
             glVertex2d(340,170);
           // glVertex2d(310,145);
              glVertex2d(240,155);  
            glEnd();

            glBegin(GL_POLYGON);
               glColor3f(0,0.28,0.98);
             glVertex2d(240,155);
             
             glVertex2d(330,135);//
            glVertex2d(310,145);
            glVertex2d(340,170);
              glVertex2d(240,155);  
            glEnd();
            glColor3f(0,.28,.98);
            glBegin(GL_POLYGON);
               glVertex2d(290,140);
                glVertex2d(330,135);
                glVertex2d(310,145);//
                glVertex2d(255,152);
                glVertex2d(290,140);
            glEnd();
        glColor3f(0.0,0.28,0.98);
            glBegin(GL_TRIANGLE_STRIP);
            
                glVertex2d(310,145);
                 glVertex2d(330,135);//white triangle
                   glVertex2d(340,170);

              glColor3f(0.,.28,.98);
              glVertex2d(390,125);
               glVertex2d(340,170);
              glColor3f(0.0,0.28,98);
               glVertex2d(370,175);
               glEnd();
               glColor3f(0.,0.28,0.98);
               glBegin(GL_POLYGON);
              glVertex2d(370,175);
                
                 glVertex2d(335,193);  
                 glVertex2d(285,170); 
                 glVertex2d(340,170);
glVertex2d(370,175);
            glEnd();
            glColor3f(0.,.28,0.98);
            glBegin(GL_TRIANGLE_STRIP);
            
             glVertex2d(335,193); 
            glVertex2d(370,175);
            glVertex2d(378,230);
            glColor3f(0.,.28,0.98);
            glVertex2d(400,228);
            glVertex2d(370,175);
                 glVertex2d(440,210);
             glColor3f(0.0,0.28,0.98);
              //glVertex2d(390,125);
              glVertex2d(370,175);
              glVertex2d(430,175);
                glColor3f(0.0,0.28,0.98);
                glVertex2d(430,175);
                glVertex2d(370,175);
                glVertex2d(390,123); //
                 glVertex2d(430,175);
                 glColor3f(0.,0.28,0.98);
                   glVertex2d(435,110);
                   glColor3f(0.,0.28,0.98);
                   glVertex2d(500,175);
                      //
                   
                      //  glVertex2d(370,175);
                           glVertex2d(430,175);
                           glColor3f(0,0.28,0.98);
                              glVertex2d(440,210);
                              glEnd();
                              glBegin(GL_TRIANGLE_STRIP);
                               glVertex2d(500,175);
                               glVertex2d(435,110);
                               glColor3f(0.,.28,.98);
                               glVertex2d(470,100);
                               glVertex2d(500,175);
                               glColor3f(0.,.28,.98);
                               glVertex2d(500,125);
                                glVertex2d(470,100);
                                 glColor3f(0.,.28,.98);
                                 glVertex2d(530,80);
                                 glEnd();
                                 glBegin(GL_TRIANGLE_STRIP);
                                  glColor3f(0.,.28,.98);
                                     
                                     glVertex2d(500,175);
                                    glVertex2d(550,120);
                                    glVertex2d(500,125);
                                    glColor3f(0.,0.28,.98);
                                     glVertex2d(590,80);
                                glEnd();
                                glBegin(GL_TRIANGLE_STRIP);
                                       glColor3f(0.,0.28,.98);
                                      glVertex2d(530,80);
                                       glVertex2d(500,125);
                                
                                       glVertex2d(590,60);
                                       glColor3f(0,0.28,.98);
                                       glVertex2d(570,90);
                                glEnd();

                           glBegin(GL_POLYGON);
                                       glColor3f(0,0.28,.98);
                                      glVertex2d(590,60);
                                       glVertex2d(560,30);
                                        glVertex2d(575,00);
                                         glVertex2d(590,30);
                                         glEnd();
                                         glBegin(GL_TRIANGLE_STRIP);
                                       glColor3f(.0,0.28,.98);
                                     
                                        
                                         glVertex2d(590,30);
                                         glVertex2d(575,00);
                                        glVertex2d(620,00);
                                        glVertex2d(595,-10);

                                         glEnd();
                                           glBegin(GL_TRIANGLE_STRIP);
                                         glColor3f(0,.28,.98);
                                           glVertex2d(590,60);
                                            glVertex2d(590,30);
                                             glVertex2d(620,00);
                                               glVertex2d(590,60);
                                               glColor3f(0.0,0.28,.98);
                                              glVertex2d(640,40);
                                               glVertex2d(620,00);
                                               glColor3f(0.0,0.28,.98);
                                              glVertex2d(660,30);

                                glEnd();

     glBegin(GL_TRIANGLE_STRIP);
      glColor3f(0,0.28,.98);
      glVertex2d(580,85);
       glVertex2d(640,70);
      glVertex2d(670,90);
     
        glColor3f(0,.28,.98);
       glVertex2d(640,70);
        glVertex2d(710,50);
        
        glEnd();
        glBegin(GL_TRIANGLE_STRIP);
        glVertex2d(580,85);
        glVertex2d(670,90);
        glColor3f(0,.28,.98);
             glVertex2d(640,100);
              

    glEnd();
    glBegin(GL_TRIANGLE_STRIP);
      glColor3f(0,0.28,.98);
      glVertex2d(580,85);
       glVertex2d(640,70);
       glVertex2d(670,40);
       glColor3f(0,0.28,.98);
        glVertex2d(640,70);
        glColor3f(0,.28,.98);
         glVertex2d(730,45);
        glEnd();
        glBegin(GL_TRIANGLE_STRIP);
        glVertex2d(730,42);
       glVertex2d(650,85);
        glColor3f(0,0.28,0.98);
               glVertex2d(710,85);
       glEnd();
       glBegin(GL_TRIANGLE_STRIP);
      glColor3f(0.,0.28,.98);
      glVertex2d(570,90);
       glVertex2d(590,60);
       glVertex2d(660,30);
       glVertex2d(570,90);
       glColor3f(0.,0.28,.98);
       glVertex2d(575,85);

       glEnd();
}

void firstdisp()
{
  
   glClearColor(1,1,1,1);
	 glClear(GL_COLOR_BUFFER_BIT);	
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
  glPointSize(5.0);
  //glMatrixMode(GL_MODELVIEW);
	gluOrtho2D(0.0,1000.0,0.0,1000.0);
    
		
  
    glColor3f(r,g,b);
  
   
     glBegin(GL_POLYGON);
        glVertex2f(0,650);
        glVertex2f(1000,650);
        glVertex2f(1000,1000);
        glVertex2f(0,1000);
        glColor3f(0.02,.71,1);
       glBegin(GL_POLYGON);
        glVertex2f(0,630);
        glVertex2f(1000,630);
        glVertex2f(1000,650);
        glVertex2f(0,650);
       
         glEnd();
         glColor3f(0,0.6,0.8);
         glBegin(GL_POLYGON);
        glVertex2f(0,100);
        glVertex2f(1000,100);
        glVertex2f(1000,0);
        glVertex2f(0,0);
        glVertex2f(0,100);
         glEnd();
          glColor3f(0.25,.41,.88);
         glBegin(GL_POLYGON);
        glVertex2f(0,630);
        glVertex2f(1000,630);
        glVertex2f(1000,100);
        glVertex2f(0,100);
       glEnd();
    
    if(flag==0)
    {
      
         sun();
         sflag=1;
         if(mcloud==0)
         cloud();
         if(mcloud==1)
         {
         glPushMatrix();
	
	glRotatef(angle,0.0,0.0,0.0); 
	glTranslatef(Autorun,0.0,0.0); 
	glTranslatef(xt,yt,0.0);
      cloud();
       glPopMatrix();
        // glPopMatx();
         }
     
    } 
     if(pflag==1)
    {
      plastic();
    } 
  if(flag==1)
  {
    //stars();
    sflag=0;
      moon();
  }
   if(dflag==1)
   {
      glPushMatrix();
	
	glRotatef(angle,0.0,0.0,0.0); 
	glTranslatef(Autorun,0.0,0.0); 
	glTranslatef(xt,yt,0.0);			//For Move    NEWS/QDZC  each Position.
   glPushMatrix();
      dolphin();
   glPopMatrix();
   glPopMatrix();
   
   }
  
  
      
      
    int i;
    if(display_order==2)
    {
    glColor3f(1,1,1);
char stru[]="PRESS U/u TO CONTINUE";
glRasterPos2f(400,50);
		for(i=0;i<strlen(stru);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,stru[i]);
		
		}
    }
    if(display_order==5)
    {
    glColor3f(1,1,1);
char stru[]="PRESS L/l TO CONTINUE";
glRasterPos2f(400,50);
		for(i=0;i<strlen(stru);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,stru[i]);
		
		}
    }
        
   if(mship==0)
     {
            if(dflag==1)
            {
              sflag=1;
            }
             ship();
             tflag=0;
            glutSwapBuffers();
     }
      if(mship==1)
      {
        
            glPushMatrix();
	glPushMatrix();
	tflag=1;
	glRotatef(angle,0.0,0.0,0.0); 
	glTranslatef(Autorun,0.0,0.0); 
	glTranslatef(xt,yt,0.0);
      ship();
     
       glPopMatrix();
		glPopMatrix();
    
	glutSwapBuffers();
  glutPostRedisplay();
      }       
    
        glEnd();
         glFlush();
         if(flag==1)
  {
    stars();
  }
         
}
void fishhead()
{
    float x1,y1,x2,y2; 
    glColor3f(1,1,1);
   
    float angle; double radius=120; 
    x1 = 300,y1=300;
     glColor3f(1,0.5,0);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.56f;angle<4.764555f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(y2,x2);
        } glEnd();
         x1 = 260,y1=360,radius=20;
         if(eflag==0)
              glColor3f(1,1,1);
        else
        {
          glColor3f(1,0,0);
        }
        
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        x1 = 260,y1=360,radius=10;
     glColor3f(0,0,0);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        x1 = 400,y1=380,radius=60;
     glColor3f(1,0.5,0);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<3.2f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(y2,x2);
        } glEnd();
        x1 = 400,y1=380,radius=30;
     glColor3f(1,1,1);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=0.65f;angle<3.4f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(y2,x2);
        } glEnd();
         x1 = 360,y1=200,radius=60;
     glColor3f(1,0.5,0);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<3.2f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
       
        } glEnd();
         x1 = 360,y1=200,radius=30;
     glColor3f(1,1,1);
        
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<3.2f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
       
        } glEnd();
        x1 =190,y1=260,radius=60;
     glColor3f(1,1,1);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<1.90f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        x1 = 900,y1=900;
     glColor3f(1,0.5,0);
    glColor3f(1,1,1);
      if(cflag==1)
    {
    glBegin(GL_POLYGON);
   glVertex2d(130,330);
   glVertex2d(150,120);
   glVertex2d(250,110);
   glVertex2d(250,450);
   glVertex2d(130,330);
   glEnd();   
   glLineWidth(3);
   glBegin(GL_LINES);
   glVertex2f(250,110);
   glVertex2f(290,110);
   glVertex2f(290,110);
   glVertex2f(300,140);
    glVertex2f(300,140);
     glVertex2f(250,150);

     glVertex2f(250,450);
   glVertex2f(290,460);
   glVertex2f(290,460);
   glVertex2f(300,430);
    glVertex2f(300,430);
     glVertex2f(250,420);
   glEnd();
    }
}
void fhishhead1()
{
    float x1,x2,y1,y2,radius=120;
    x1 = 620,y1=620;
     glColor3f(0,0,1);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.56f;angle<4.764555f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(y2,x2);
        } glEnd();
		 x1 = 560,y1=650,radius=20;
      if(eflag==0)
              glColor3f(1,1,1);
        else
        {
          glColor3f(1,0,0);
        }
        
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        x1 = 560,y1=650,radius=10;
     glColor3f(0,0,0);
     glBegin(GL_TRIANGLE_FAN);
        for (angle=1.0f;angle<365.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();

	x1 = 700,y1=680,radius=60;
     glColor3f(0,0,0);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<3.2f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(y2,x2);
        } glEnd();
		
     
        x1 =520,y1=560,radius=50;
     glColor3f(1.0,1,1);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<1.90f;angle+=0.1) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
  
}
void reshape(int w,int h)
{
    glViewport (0, 0, (GLsizei) w, (GLsizei) h); 
   glMatrixMode (GL_PROJECTION);
   glLoadIdentity ();
   gluPerspective(60.0, (GLfloat) w/(GLfloat) h, 1.0, 20.0);
   //glMatrixMode(GL_MODELVIEW);
   glLoadIdentity();
   gluLookAt (0.0, 0.0, 5.0, 0.0, 0.0, 0.0, 0.0, 1.0, 0.0);
    

}
void buble()
{
    float x1,y1,x2,y2; 
    float angle; double radius=20; 
	
    x1 = 100,y1=100;
     glColor3f(1,1,1);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<361.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
		x1 = 150,y1=150;
		  glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<361.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
		x1 = 100,y1=200;
		  glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<361.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
        x1 = 400,y1=400;
     glColor3f(1,1,1);
      glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<361.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
		x1 = 450,y1=450;
		  glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<361.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
		x1 = 400,y1=600;
		  glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<361.0f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
       // glutSphere(1,0,0);
        //glFlush();
}
void seconddisp(void)
{
   
   //Autorun = 500;			// For Movement Autorun
 //Autorun1 = 800;
	glClear(GL_COLOR_BUFFER_BIT);	
	glColor3f(0,1,0);
	//flag=0;
  
  glClearColor(0,1,1,1);
	 glClear(GL_COLOR_BUFFER_BIT);	
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
	gluOrtho2D(0.0,1000.0,0.0,1000.0);
	if(pflag==1)
    {
      plastic();
    }
    glColor3f(0,1,0);
	glBegin(GL_TRIANGLES);
	glVertex2f(100,00);
	glVertex2f(70,100);
	glVertex2f(150,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(150,00);
	glVertex2f(175,100);
	glVertex2f(200,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(200,0);
	glVertex2f(260,100);
	glVertex2f(240,0);
    glEnd();

		glBegin(GL_TRIANGLES);
	glVertex2f(400,00);
	glVertex2f(370,100);
	glVertex2f(450,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(450,00);
	glVertex2f(475,100);
	glVertex2f(500,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(500,0);
	glVertex2f(560,100);
	glVertex2f(540,0);
    glEnd();

		glBegin(GL_TRIANGLES);
	glVertex2f(700,00);
	glVertex2f(670,100);
	glVertex2f(750,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(750,00);
	glVertex2f(775,100);
	glVertex2f(800,00);
    glEnd();
	glBegin(GL_TRIANGLES);
	glVertex2f(800,0);
	glVertex2f(860,100);
	glVertex2f(840,0);
    glEnd();
    //Autorun=400;
    
	glPushMatrix();
	glPushMatrix();
	
	glRotatef(angle,0.0,0.0,0.0); 
	glTranslatef(Autorun,0.0,0.0); 
	glTranslatef(xt,yt,0.0);			//For Move    NEWS/QDZC  each Position.


	
	glPushMatrix();
    
	glBegin(GL_TRIANGLES);
    
glColor3f(1, 0.5, 0);
glVertex2f(300,420);
glVertex2f(600,300);
glVertex2f(300,180);
glEnd();

glLineWidth(5);
glBegin(GL_LINES);
glColor3f(0,0,0);
glVertex2f(330, 190);
glVertex2f(330, 410);
glVertex2f(360, 400);
glVertex2f(360, 200);
glVertex2f(400, 220);
glVertex2f(400, 380);
glVertex2f(430, 370);
glVertex2f(430, 232);
glVertex2f(470, 250);
glVertex2f(470, 350);
glVertex2f(500, 340);
glVertex2f(500, 260);
glEnd();

glBegin(GL_POLYGON);
glColor3f(1, 1, 1); 
glVertex2f(330, 190);
glVertex2f(330, 410);
glVertex2f(360, 400);
glVertex2f(360, 200);
glVertex2f(330, 190);
glEnd();

glBegin(GL_POLYGON);
glColor3f(1, 1, 1); 
glVertex2f(400, 220);
glVertex2f(400, 380);
glVertex2f(430, 370);
glVertex2f(430, 232);
glVertex2f(400, 220);
glEnd();



glBegin(GL_POLYGON);
glColor3f(1, 1, 1); 
glVertex2f(470, 250);
glVertex2f(470, 350);
glVertex2f(500, 340);
glVertex2f(500, 260);
glVertex2f(470, 245);
glEnd();

glBegin(GL_TRIANGLES);
glColor3f(0, 0, 0); 
glVertex2f(500, 340);
glVertex2f(410, 450);
glVertex2f(390, 385);

glEnd();

glBegin(GL_POLYGON);
glColor3f(1, 0.5, 0.0);
glVertex2f(600, 300);
glVertex2f(700, 400);
glVertex2f(700, 350);
glVertex2f(600, 300);
glEnd();
glBegin(GL_POLYGON);
glColor3f(1, 0.5, 0);
glVertex2f(600, 300);
glVertex2f(700, 200);
glVertex2f(700, 250);
glVertex2f(600, 300);
glEnd();
fishhead();
fhishhead1();
glColor3f(0,0,1);
	glRecti(620,500,670,740);
	float x1,x2,y1,y2,radius;
	x1 = 570,y1=510,radius=60;
     glColor3f(1,1,0);
	 glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<2.6f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        } glEnd();
		x1 = 570,y1=510,radius=30;
     glColor3f(0,0,0);
	 glBegin(GL_TRIANGLE_FAN);
       glVertex2f(x1,y1); 
       for (angle=1.0f;angle<2.6f;angle+=0.2) 
       { x2 = x1+sin(angle)*radius; 
       y2 = y1+cos(angle)*radius; 
       glVertex2f(x2,y2);
        
        
        } glEnd();
///2nd fish

///dori
	glBegin(GL_TRIANGLES);
glColor3f(0, 0, 1);
glVertex2f(670, 740);
glVertex2f(750, 630);
glVertex2f(670, 500);
glEnd();
glBegin(GL_TRIANGLE_STRIP);
glColor3f(1, 1, 0);
glVertex2f(710, 630);
glVertex2f(820, 700);
glVertex2f(790, 620);
glVertex2f(710, 630);
glVertex2f(820, 560);glEnd();

if(pflag==1)
{
  glColor3f(1,1,1);
  glBegin(GL_POLYGON);
      glVertex2f(900,630);//cover
      glVertex2f(850,610);
      glVertex2f(800,680);
      glVertex2f(850,700);
      glVertex2f(900,630);
      glEnd();
      glLineWidth(3);
      glBegin(GL_LINES);
       glVertex2f(800,680);
   glVertex2f(790,690);
   glVertex2f(790,690);
   glVertex2f(805,705);
   glVertex2f(805,705);
    glVertex2f(820,685);


   glVertex2f(850,700);
   glVertex2f(840,720);
   glVertex2f(840,720);
   glVertex2f(830,710);
   glVertex2f(830,710);
   glVertex2f(840,690);
   


glEnd();
glBegin(GL_POLYGON);
      glVertex2f(600,200);//cover
      glVertex2f(550,180);
      glVertex2f(500,250);
      glVertex2f(550,270);
      glVertex2f(600,200);
      glEnd();
      glLineWidth(3);
      glColor3f(1,1,1);
      glBegin(GL_LINES);
      glVertex2f(500,250);
   glVertex2f(490,270);
   glVertex2f(490,270);
   glVertex2f(500,280);
   glVertex2f(500,280);
   glVertex2f(515,256);

   glVertex2f(550,270);
   glVertex2f(540,290);
   glVertex2f(540,290);
   glVertex2f(530,280);
   glVertex2f(530,280);
   glVertex2f(535,266);
   glEnd();
}
glEnd();

	glPushMatrix();
	glRotatef(angle,0.0,0.0,0.0); 
	glTranslatef(0.0,Autorun1,0.0); 
	glTranslatef(xt,yt,0.0);
		
	buble();
	
	
	
	glPopMatrix();
	glPopMatrix();
	glPopMatrix();
	glPopMatrix();
  if(display_order==3)
    {
    glColor3f(1,1,1);
char strn[]="PRESS N/n TO CONTINUE";
glRasterPos2f(400,50);
		for(int i=0;i<strlen(strn);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,strn[i]);
		
    }
    }
    if(display_order==6)
    {
    glColor3f(1,1,1);
char strn[]="PRESS E/e TO CONTINUE";
glRasterPos2f(400,50);
		for(int i=0;i<strlen(strn);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,strn[i]);
		
    }
		}
     
	glutSwapBuffers();
  
  glEnd();
   
//	glFlush();
	
	

}
void setpixel1(int x,int y)
{
glColor3f(0, 0, 0);
glPointSize(10);
glBegin(GL_POINTS);
glVertex2f(x, y);
glEnd();
//glFlush();
}

void dda1(int xi, int yi, int xe, int ye)
{
int dx = xe - xi, dy = ye - yi, steps, k;
float xinc, yinc, x = xi, y = yi;
if (fabs(dx) > fabs(dy))
steps = fabs(dx);
else
steps = fabs(dy);
xinc = float(dx) / float(steps);
yinc = float(dy) / float(steps);
setpixel1(round(x), round(y));
for (k = 0; k < steps; k++)
{
x += xinc;
y += yinc;
setpixel1(round(x), round(y));
}
}


void past()
{
  glClearColor(0,0,0,1);
  glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
  
    

  glEnable(GL_DEPTH_TEST);

  glMatrixMode(GL_PROJECTION);
  glLoadIdentity();
  glOrtho(-100.0, 100.0, -100.0, 100.0, -100.0, 100.0);
  glMatrixMode(GL_MODELVIEW);
  glLoadIdentity();
  
  gluLookAt(0, 0, 1, 1.0,  0.0, 0.0, 0.0, 1.0, 0.0);
  glScalef(.2,.2,.2);
 
  glTranslatef(-500, 0, 0);
    
  glColor3f(1,1,1);
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'C');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'D');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'I');
  
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'T');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'I');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'F');
     glTranslatef(-1150, -200, 0);
     
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'S');  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'E');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'A');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'I');  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'T');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'H');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'E');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'P');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'A');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'S');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'T');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'S');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'E'); 
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'A');
   glTranslatef(-1200, -270, 0);
     glScalef(.3,.3,.3);
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'P');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'R');  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'E');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'S');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'S');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'P');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, '/');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'p');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'C');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'T');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'I');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'U');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'E');
  glutSwapBuffers();
  
}
void now()
{
  glClearColor(0,0,0,1);
  glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
  
    

  glEnable(GL_DEPTH_TEST);

  glMatrixMode(GL_PROJECTION);
  glLoadIdentity();
  glOrtho(-100.0, 100.0, -100.0, 100.0, -100.0, 100.0);
  glMatrixMode(GL_MODELVIEW);
  glLoadIdentity();
  
  gluLookAt(0, 0, 1, 1.0,  0.0, 0.0, 0.0, 1.0, 0.0);
  glScalef(.2,.2,.2);
 
  glTranslatef(-500, 0, 0);
    
  glColor3f(1,1,1);
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'C');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'D');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'I');
  
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'T');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'I');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
  glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'F');
     glTranslatef(-1000, -200, 0);
     
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'S');  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'E');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'A');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'I');  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'W');
   
   glTranslatef(-600, -270, 0);
     glScalef(.3,.3,.3);
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'P');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'R');  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'E');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'S');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'S');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');  
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'K');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, '/');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'k');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, ' ');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'C');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'O');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'T');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'I');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'N');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'U');
   glutStrokeCharacter(GLUT_STROKE_ROMAN, 'E');
  glutSwapBuffers();
  glutSwapBuffers();
  

}
void moral()
{
  glClearColor(0,1,1,1);
	 glClear(GL_COLOR_BUFFER_BIT);	
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
  glPointSize(5.0);


  //glMatrixMode(GL_MODELVIEW);
	gluOrtho2D(0.0,1000.0,0.0,1000.0);
    
  glColor3f(0,0,10);
char strn[]="STOP USAGE OF PLASTIC   PLEASE SAVE THE SEA ANIMALS";
glRasterPos2f(200,480);
		for(int i=0;i<strlen(strn);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,strn[i]);
		
    }
    char strs[]="PRESS S/s to Exit ";
glRasterPos2f(400,50);
		for(int i=0;i<strlen(strs);i++)
		{
			glutBitmapCharacter(GLUT_BITMAP_TIMES_ROMAN_24,strs[i]);
		
    }

    
    if(pflag==1)
  plastic();
    glutSwapBuffers();
    glutPostRedisplay();
}
void Display()
{
    glClearColor(1,1,1,1);
    glClear(GL_COLOR_BUFFER_BIT);
	if(display_order==0)
	{
    text();
	glutKeyboardFunc(key);
	}
	if(display_order==1)
	{
		past();
		glutKeyboardFunc(key);
	}
  if(display_order==2)
	{
		firstdisp();
		glutKeyboardFunc(key);
	}
  if(display_order==3)
	{
		seconddisp();
		glutKeyboardFunc(key);
	}
  if(display_order==4)
{
  
		now();
		glutKeyboardFunc(key);
	}
  if(display_order==5)
	{
		firstdisp();
		glutKeyboardFunc(key);
	}
  if(display_order==6)
	{
		seconddisp();
		glutKeyboardFunc(key);
	}
  if(display_order==7)
  {
      moral();
		glutKeyboardFunc(key);
  }

  
    glFlush();
}
void key(unsigned char k,int x,int y)
{
  
    switch(k)
    {
        case 'r':
        case 'R':
                 glutInitDisplayMode(GLUT_RGB | GLUT_DOUBLE | GLUT_DEPTH);
  glutInitWindowSize(1400, 900);
  glutInitWindowPosition(0, 0);
  glutCreateWindow("past");
  glutDisplayFunc(Display);
              display_order++;
             break;
         case 'p':
         case 'P':
		        glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
             	glutInitWindowPosition(0,0);   //200 Lelt 50 Height
             	glutInitWindowSize(w,h);
            	glutCreateWindow("firstdisp");
            
            glutIdleFunc(turbine);
              glutIdleFunc(animation);  
	            glutIdleFunc(Auto);
	            glutDisplayFunc(Display);
             // drawTurbine();
				smenu1=glutCreateMenu(night);

   
   glutAddMenuEntry("FULL MOON",1);
   glutAddMenuEntry("HALF MOON",2);
   glutAddMenuEntry("NO MOON",3);
    smenu2=glutCreateMenu(day);
     glutAddMenuEntry("MORNING MODE",1);
   glutAddMenuEntry("CLOUD MOVEMENT",2);
   glutAddMenuEntry("STOP CLOUD ANIMATION",3);
   glutCreateMenu(mainmenu);
   glutAddSubMenu("DAY MODE",smenu2);
   glutAddSubMenu("NIGHT MODE",smenu1);
   glutAddMenuEntry("SHIP MOVEMENT",1);
   glutAddMenuEntry("STOP SHIP ANIMATION",2);
   glutAddMenuEntry("DOLPHIN",3);


   glutAttachMenu(GLUT_RIGHT_BUTTON);
				
				display_order=display_order+1;
            break;
                
        case 'u':
        case 'U':glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
             	glutInitWindowPosition(0,0);   //200 Lelt 50 Height
             	glutInitWindowSize(w,h);
            	glutCreateWindow("seconddisp");
	            glutDisplayFunc(Display);
              glutIdleFunc(animation);  
	            glutIdleFunc(Auto1);
				      display_order++;
              break;
                
       case 'n':        
        case 'N':  
        glutInitDisplayMode(GLUT_RGB | GLUT_DOUBLE | GLUT_DEPTH);
  glutInitWindowSize(1400, 900);
  glutInitWindowPosition(0, 0);
  glutCreateWindow("NOW");
	            glutDisplayFunc(Display);
              display_order++;
            
              break;
        case 'K':
        case 'k':pflag=1;
                dflag=0;
              glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
             	glutInitWindowPosition(0,0);   //200 Lelt 50 Height
             	glutInitWindowSize(w,h);
            	glutCreateWindow("Thirddisp");
	            glutDisplayFunc(Display);
              
				smenu1=glutCreateMenu(night);

   
   glutAddMenuEntry("FULL MOMORALON",1);
   glutAddMenuEntry("HALF MOON",2);
   glutAddMenuEntry("NO MOON",3);
    smenu2=glutCreateMenu(day);
     glutAddMenuEntry("MORNING MODE",1);
   glutAddMenuEntry("CLOUD MOVEMENT",2);
   glutAddMenuEntry("STOP CLOUD ANIMATION",3);
   
   glutCreateMenu(mainmenu);

   glutAddSubMenu("DAY MODE",smenu2);
   glutAddSubMenu("NIGHT MODE",smenu1);
   glutAddMenuEntry("SHIP MOVEMENT",1);
   glutAddMenuEntry("STOP ANIMATION",2);
   glutAddMenuEntry("DOLPHIN",3);

  // glutCreateMenu(mainmenu);
   glutAttachMenu(GLUT_RIGHT_BUTTON);
	 glutIdleFunc(animation);  
	 glutIdleFunc(Auto);
  
				display_order++;
        break;
        case 'l':
        case 'L':glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
             	glutInitWindowPosition(0,0);   //200 Lelt 50 Height
             	glutInitWindowSize(w,h);
            	glutCreateWindow("Fourthdisp");
	            glutDisplayFunc(Display);
              	glutIdleFunc(animation);  
	            glutIdleFunc(Auto1);
              eflag=1;
              cflag=1;
             
				display_order++;
              break;
        case 'e':
        case 'E':glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
             	glutInitWindowPosition(0,0);   //200 Lelt 50 Height
             	glutInitWindowSize(w,h);
            	glutCreateWindow("moral");
	            glutDisplayFunc(Display);
              	pflag=1;
				display_order++;
            break;
        default:exit(0);
    }
glFlush();
}

int main(int a,char ** b)
{
	glutInit(&a,b);
	glutInitDisplayMode(GLUT_DOUBLE|GLUT_RGB);
	glutInitWindowPosition(0,0);   //200 Lelt 50 Height
	glutInitWindowSize(w,h);
	glutCreateWindow("miniproject");
	glutDisplayFunc(Display);
  glutReshapeFunc(my_reshape);
  glutKeyboardFunc(key); 
	glutMainLoop();
	 return 0;
  
}